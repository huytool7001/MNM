<?php
    require '../../config.php';
    if (isset($_POST["orderId"]) && !empty(trim($_POST["orderId"]))) {
        $sql = 'DELETE FROM orders WHERE orderId = ? AND productId = ?';
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, 'ss', $_POST["orderId"], $_POST["productId"]);
            if(mysqli_stmt_execute($stmt)){
                header('location: '.'../pages/index.php?orderId='.$_POST["orderId"]);
                exit();
            }
            else{
                header('location: '.'../../examples/404.html');
                exit();
            }
            mysqli_stmt_close($stmt);
        }
        else{
            header('location: '.'../../examples/404.html');
            exit();
        }
    }
?>