<?php
    require '../../config.php';
    if(isset($_POST["id"])&&!empty(trim($_POST["id"])))
    {
        $productId = $_POST["id"];
        $sql = 'SELECT * FROM products WHERE idCategory_product = "' .$productId. '"';
        if ($result = mysqli_query($con, $sql)) {
            if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo json_encode($row);       
            }              
            mysqli_free_result($result);
        }
    }
?>