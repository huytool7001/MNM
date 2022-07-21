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
    require 'config.php';
    require './cart.php';
    if(isset($_SESSION['cart'])){
        $id = generateRandomString();
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $addressType = $_POST['addressType'];
        $status = 'Mới';
        $sql = 'INSERT INTO orderDetail(id, customer, phone, address, city, addressType) VALUES(?, ?, ?, ?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
          mysqli_stmt_bind_param($stmt, 'sssssss', $id, $name, $phone, $address, $city, $addressType, $status);
          mysqli_stmt_execute($stmt);
        }
        $sql = 'INSERT INTO orders(orderId, productId, size, quantity) VALUES(?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                mysqli_stmt_bind_param($stmt, 'ssis', $id, $_SESSION['cart'][$i][0], $_SESSION['cart'][$i][5], $_SESSION['cart'][$i][2]);
                mysqli_stmt_execute($stmt);             
            }
        }
        session_destroy();
    }
?>
