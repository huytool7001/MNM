<?php
header('Content-type: text/html; charset=utf-8');
require './cart.php';
require './config.php';
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

function generateRandomString($length = 14) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán qua MoMo";

$redirectUrl = "http://localhost:8080/client/php/order.php";
$ipnUrl = "http://localhost:8080/client/php/order.php";
$extraData = "";

if (!empty($_POST)) {

    $existId = false;
    do{
        $orderId = generateRandomString();
        $sql = "SELECT * FROM orderDetail WHERE id = '".$orderId."'";
        if ($result = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($result) > 0) {
            $existId = true;
            }
        }
    }
    while($existId);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $addressType = $_POST['addressType'];
    $amount = getTotal();
    $extraData = base64_encode(        
        '{"name": "' . $name .
        '", "phone": "' . $phone .
        '", "address": "' . $address.
        '", "city": "' . $city.
        '", "addressType": "' . $addressType .'"}'
    );
    echo $extraData;
    $requestId = time() . "";
    $requestType = "payWithATM";

    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature,
    );
    $result = execPostRequest($endpoint, json_encode($data));
    echo $result;
    $jsonResult = json_decode($result, true);  // decode json
    //Just a example, please check more in there

    header('location: ' . $jsonResult['payUrl']);
}
?>