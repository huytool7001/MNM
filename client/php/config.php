<?php 
    $con = new mysqli('localhost','root','','downyshoesstore') or die('Connection Failed!');
    $con->set_charset("utf8");
    
    $count_page = ('./hitcount.txt');
    $hits = file($count_page);
    if(strpos($_SERVER['REQUEST_URI'],"client") !== false){
        $hits[0] ++;
        $fp = fopen($count_page , "w");
        fputs($fp , "$hits[0]");
        fclose($fp);
    }
    
?>