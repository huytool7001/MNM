<?php
    require '../config.php';
    require './cart.php';
    if(isset($_GET['partnerCode']) && isset($_SESSION['cart'])){
        $data = base64_decode($_GET['extraData']);
        $array = json_decode($data, true);
        $id = $_GET['orderId'];
        $name = $array["name"];
        $phone = $array['phone'];
        $address = $array['address'];
        $city = $array['city'];
        $addressType = $array['addressType'];
        $status = 'Mới';

        $sql = 'INSERT INTO orderDetail(id, customer, phone, address, city, addressType, status) VALUES(?, ?, ?, ?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
          mysqli_stmt_bind_param($stmt, 'sssssss', $id, $name, $phone, $address, $city, $addressType, $status);
          mysqli_stmt_execute($stmt);
        }
        $sql = 'INSERT INTO orders(orderId, productId, size, quantity) VALUES(?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                echo $_SESSION['cart'][$i][0];
                mysqli_stmt_bind_param($stmt, 'ssis', $id, $_SESSION['cart'][$i][0], $_SESSION['cart'][$i][5], $_SESSION['cart'][$i][2]);
                mysqli_stmt_execute($stmt);             
            }
        }
        session_destroy();
        header('location: '.('../index.php'));
    }
?>
