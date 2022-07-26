<?php
    require '../config.php';
    $category = $_POST["category"];
    $minprice = $_POST["minprice"]; 
    $maxprice = $_POST["maxprice"];
    $color = $_POST["color"];
    $sort = $_POST["sort"];
    $search = $_POST["search"];
    $query = 'SELECT * FROM products WHERE price BETWEEN '.$minprice.' AND '.$maxprice;
    if(!empty(trim($category))){
        $query .= ' AND ' . $category;
    }
    if(!empty(trim($color))){
        $query .= ' AND ' . $color;
    }
    if(!empty(trim($search))){
        $query .= ' AND ' . $search;
    }
    if(!empty(trim($sort))){
        $query.= ' ORDER BY '.$sort;
    }
    $data = array();
    if ($result = mysqli_query($con, $query)) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = $row;
        }   
        echo json_encode($data);        
    }
?>
