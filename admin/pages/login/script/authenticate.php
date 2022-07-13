<?php
    session_start();
       
    if(isset($_GET["logout"])) {
        unset($_SESSION["username"]);
        setcookie ("username",$_POST["username"],time() - 3600, '/admin');
        setcookie ("password",$_POST["password"],time() - 3600, '/admin');
        header("location: " . ('../../login/pages/index.php'));
    }
?>