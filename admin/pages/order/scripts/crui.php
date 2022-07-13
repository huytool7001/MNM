<?php
$orderId = '';
$productId = '';
$size = '';
$quantity = '';
require '../../config.php';
if (isset($_GET["orderId"]) && !empty(trim($_GET["orderId"]))) {
  $orderId = $_GET["orderId"];
}
if (isset($_GET["productId"]) && !empty(trim($_GET["productId"]))) {
  $sql = 'SELECT * FROM orders WHERE orderId = ? AND productId = ?';
  if ($stmt = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($stmt, 'ss', $_GET["orderId"], $_GET["productId"]);
    if (mysqli_stmt_execute($stmt)) {
      $result = mysqli_stmt_get_result($stmt);
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $orderId = $row['orderId'];
        $productId = $row['productId'];
        $size = $row['size'];
        $quantity = $row['quantity'];
      } else {
        header("location: " . ('../../examples/404.html'));
        exit();
      }
    } else {
      header("location: " . ('../../examples/404.html'));
      exit();
    }
    mysqli_stmt_close($stmt);
  } else {
    header("location: " . ('../../examples/404.html'));
    exit();
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["method"]) && !empty(trim($_POST["method"]))){
    if($_POST["method"]=="PUT"){
      $sql = 'UPDATE orders SET size = ?, quantity = ? WHERE orderId = ? AND productId = ?';
      if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "iiss", $_POST["size"], $_POST["quantity"], $_POST["orderId"], $_POST["productId"]);
    
        if (mysqli_stmt_execute($stmt)) {
          header("location: " . ('../pages/index.php?orderId=' . $_POST["orderId"]));
          exit();
        } else {
          header("location: " . ('../../examples/404.html'));
          exit();
        }
        mysqli_stmt_close($stmt);
      } else {
        header("location: " . ('../../examples/404.html'));
        exit();
      }
    }
    else{
      $sql = 'SELECT * FROM orders WHERE orderId = ? AND productId = ? AND size = ?';
      if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssi", $_POST["orderId"], $_POST["productId"], $_POST["size"]);
        if ($row = mysqli_stmt_execute($stmt)) {
          $result = mysqli_stmt_get_result($stmt);
          if (mysqli_num_rows($result) > 0) {
            $sql = 'UPDATE orders SET quantity = quantity + ? WHERE orderId = ? AND productId = ? AND size = ?';
            if ($stmt = mysqli_prepare($con, $sql)) {
              mysqli_stmt_bind_param($stmt, "issi", $_POST["quantity"], $_POST["orderId"], $_POST["productId"], $_POST["size"]);
          
              if (mysqli_stmt_execute($stmt)) {
                header("location: " . ('../pages/index.php?orderId=' . $_POST["orderId"]));
                exit();
              } else {
                //header("location: " . ('../../examples/404.html'));
                exit();
              }
              mysqli_stmt_close($stmt);
            } else {
              //header("location: " . ('../../examples/404.html'));
              exit();
            }
          }
        }
      }
      $sql = 'INSERT INTO orders(orderId, productId, size, quantity) VALUES(?, ?, ?, ?)';
      if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssii", $_POST["orderId"], $_POST["productId"], $_POST["size"], $_POST["quantity"]);
        if (mysqli_stmt_execute($stmt)) {
          header("location: " . ('../pages/index.php?orderId='.$_POST["orderId"]));
          exit();
        } else {
          //header("location: " . ('../../examples/404.html'));
          exit();
        }
        mysqli_stmt_close($stmt);
      } else {
        //header("location: " . ('../../examples/404.html'));
        exit();
      }
    }
  }
  
}
?>