<?php
    function generateRandomString($length = 14) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
    function uploadImage($name){
      $IMGUR_CLIENT_ID = "0d4bd1de5efbf19";
      $filename =  basename($_FILES[$name]["name"]);
      
      $fileType = pathinfo($filename, PATHINFO_EXTENSION);

      $allowTypes = array('jpg','png','jpeg','git', 'jfif');
      if(in_array($fileType, $allowTypes)){
          //source image
          $image_source = file_get_contents($_FILES[$name]['tmp_name']);
          
          // API POST PARAMETERS
          $postFields = array("image" => base64_encode($image_source));
          //post image  to imgur  via API
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
          curl_setopt($ch, CURLOPT_POST, TRUE);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' .$IMGUR_CLIENT_ID));
          curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields );
          $response = curl_exec($ch);
          curl_close($ch);
          echo $response;
          // $statusMsg =  $response;
          // Decode API response to Array
          return json_decode($response);
      
      }
    }
    $id = '';
    $name = '';
    $price = '';
    $color = '';
    $category = '';
    $size1 = '';
    $size2 = '';
    $size3 = '';
    $size4 = '';
    $size5 = '';
    $images1 = '';
    $images2 = '';
    $images3 = '';
    $images4 = '';
    $images5 = '';
    require '../../config.php';
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
      $sql = 'SELECT * FROM products WHERE idCategory_product = ?';
      if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $param_id);
        $param_id = trim($_GET["id"]);
        if (mysqli_stmt_execute($stmt)) {
          $result = mysqli_stmt_get_result($stmt);
          if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $id = $row["idCategory_product"];
            $name = $row["nameProduct"];
            $price = $row["price"];
            $color = $row["color"];
            $category = $row["nameCategoryProduct"];
            $size1 = $row["size1"];
            $size2 = $row["size2"];
            $size3 = $row["size3"];
            $size4 = $row["size4"];
            $size5 = $row["size5"];
            $images1 = $row["images1"];
            $images2 = $row["images2"];
            $images3 = $row["images3"];
            $images4 = $row["images4"];
            $images5 = $row["images5"];
          }
          else{
            header("location: ".('../../examples/404.html'));
            exit();
          }
        }
        else{
          header("location: ".('../../examples/404.html'));
          exit();
        }
        mysqli_stmt_close($stmt);
      }
      else{
        header("location: ".('../../examples/404.html'));
        exit();
      }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if (isset($_POST["id"]) && !empty(trim($_POST["id"]))) {
        $sql = "UPDATE products SET nameProduct = '".$_POST["name"]."', nameCategoryProduct = '".$_POST["category"]."', price = '".$_POST["price"]."', color = '".$_POST["color"]."', size1 = '".$_POST["size1"]."', size2 = '".$_POST["size2"]."', size3 = '".$_POST["size3"]."', size4 = '".$_POST["size4"]."', size5 = '".$_POST["size5"]."'";
        if($_POST['newImage1'] == "true" && $_FILES['image1']['size'] != 0){
          $sql .= ", images1 = '".uploadImage('image1')->data->link."'";
        }
        if($_POST['newImage2'] == "true" && $_FILES['image2']['size'] != 0){
          $sql .= ", images2 = '".uploadImage('image2')->data->link."'";
        }
        if($_POST['newImage3'] == "true" && $_FILES['image3']['size'] != 0){
          $sql .= ", images3 = '".uploadImage('image3')->data->link."'";
        }
        if($_POST['newImage4'] == "true" && $_FILES['image4']['size'] != 0){
          $sql .= ", images4 = '".uploadImage('image4')->data->link."'";
        }
        if($_POST['newImage5'] == "true" && $_FILES['image5']['size'] != 0){
          $sql .= ", images5 = '".uploadImage('image5')->data->link."'";
        }
        $sql .= " WHERE idCategory_product = '".$_POST["id"]."'";
        echo $sql;
        if($result = mysqli_query($con, $sql)){
          header("location: ".('../pages/index.php'));
          exit();
        }
        else{
          header("location: ".('../../examples/404.html'));
          exit();
        }
      }
      else{
        //echo 'size1: '. $_POST["size1"];
        $sql = 'INSERT INTO products(idCategory_product, nameProduct, nameCategoryProduct, price, color, size1, size2, size3, size4, size5, images1, images2, images3, images4, images5) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
          $existId = false;
          do{
            $productId = generateRandomString();
            $sql = "SELECT * FROM products WHERE idCategory_product = '".$productId."'";
            if ($result = mysqli_query($con, $sql)) {
              if (mysqli_num_rows($result) > 0) {
                $existId = true;
              }
            }
          }
          while($existId);
          mysqli_stmt_bind_param($stmt, "sssisisssssssss", $productId, $param_name, $param_category, $param_price, $param_color, $param_size1, $param_size2, $param_size3, $param_size4, $param_size5, $param_images1, $param_images2, $param_images3, $param_images4, $param_images5);
          $param_name = $_POST["name"];
          $param_category = $_POST["category"];
          $param_color = $_POST["color"];
          $param_price = $_POST["price"];
          $param_size1 = ($_POST['size1'] === '') ? NULL : $_POST['size1'];;
          $param_size2 = $_POST["size2"];
          $param_size3 = $_POST["size3"];
          $param_size4 = $_POST["size4"];
          $param_size5 = $_POST["size5"];
          if($_FILES['image1']['size'] != 0){
            $param_images1 = uploadImage('image1')->data->link;
          }
          else{
            $param_images1 = '';
          }
          if($_FILES['image2']['size'] != 0){
            $param_images2 = uploadImage('image2')->data->link;
          }
          else{
            $param_images2 = '';
          }
          if($_FILES['image3']['size'] != 0){
            $param_images3 = uploadImage('image3')->data->link;
          }
          else{
            $param_images3 = '';
          }
          if($_FILES['image4']['size'] != 0){
            $param_images4 = uploadImage('image4')->data->link;
          }
          else{
            $param_images4 = '';
          }
          if($_FILES['image5']['size'] != 0){
            $param_images5 = uploadImage('image5')->data->link;
          }
          else{
            $param_images5 = '';
          }

          if(mysqli_stmt_execute($stmt)){
            header("location: ".('../pages/index.php'));
            exit();
          }
          else{
            header("location: ".('../../examples/404.html'));
            exit();
          }
          mysqli_stmt_close($stmt);
        }
        else{
          header("location: ".('../../examples/404.html'));
          exit();
        }
      }
        
    }
?>