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
    $id = '';
    $customer = '';
    $phone = '';
    $address = '';
    $city = '';
    $addressType = '';
    $status = '';
    require '../../config.php';
    if (isset($_GET["orderId"]) && !empty(trim($_GET["orderId"]))) {
      $sql = 'SELECT * FROM orderDetail WHERE id = ?';
      if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $param_id);
        $param_id = trim($_GET["orderId"]);
        if (mysqli_stmt_execute($stmt)) {
          $result = mysqli_stmt_get_result($stmt);
          if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $id = $row["id"];
            $customer = $row["customer"];
            $phone = $row["phone"];
            $address = $row["address"];
            $city = $row["city"];
            $addressType = $row["addressType"];
            $status = $row["status"];
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
        $sql = 'UPDATE orderDetail SET customer = ?, phone = ?, address = ?, city = ?, addressType = ?, status = ? WHERE id = ?';
        if($stmt = mysqli_prepare($con, $sql)){
          mysqli_stmt_bind_param($stmt, "sssssss", $_POST["customer"], $_POST["phone"], $_POST["address"], $_POST["city"], $_POST["addressType"], $_POST["status"], $_POST["id"]);
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
      else{
        $sql = 'INSERT INTO orderDetail(id, customer, phone, address, city, addressType, status) VALUES(?, ?, ?, ?, ?, ?, ?)';
        if($stmt = mysqli_prepare($con, $sql)){
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
          
          mysqli_stmt_bind_param($stmt, "sssssss", $orderId, $_POST["customer"], $_POST["phone"], $_POST["address"], $_POST["city"], $_POST["addressType"], $_POST["status"]);
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