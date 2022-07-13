<?php
function uploadImage($name){
    $IMGUR_CLIENT_ID = "0d4bd1de5efbf19";
    $filename =  basename($_FILES[$name]["name"]);
    $fileType = pathinfo($filename, PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg','git');
    if(in_array($fileType, $allowTypes)){
        //source image
        $image_source = file_get_contents($_FILES[$name]['tmp_name']);

        // API POST PARAMETERS
        $postFields = array($name => base64_encode($image_source));

        //post image  to imgur  via API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' .$IMGUR_CLIENT_ID));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields );
        $response = curl_exec($ch);
        curl_close($ch);
        // $statusMsg =  $response;
        // Decode API response to Array
        return json_decode($response);
    
        // Check iamge upload status
    }
}
        
?>