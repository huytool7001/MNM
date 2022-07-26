<?php
    require '../../config.php';
    if (isset($_POST["id"]) && !empty(trim($_POST["id"]))) {
        $sql = 'SELECT * FROM orders WHERE productId = ?';
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $_POST["id"]);
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                if (mysqli_num_rows($result) > 0) {
                    header('location: '.'../pages/index.php');
                    exit();
                }
            }
        }
        $sql = 'DELETE from products WHERE idCategory_product = ?';
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, 's', $param_id);
            $param_id = $_POST["id"];
            if(mysqli_stmt_execute($stmt)){
                header('location: '.'../pages/index.php');
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