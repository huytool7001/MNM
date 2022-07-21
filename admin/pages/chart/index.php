<?php
    require '../config.php';
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_GET["chart"] == 'sales')
        {
            $sql = 'SELECT y, m, sum(orders.quantity*products.price) AS total
                    FROM (
                        SELECT y, m
                        FROM
                        (SELECT YEAR(CURDATE()) y UNION ALL SELECT YEAR(CURDATE())-1) years,
                        (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
                        UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
                        UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12) months) ym
                    LEFT JOIN orderdetail ON ym.y = YEAR(orderdetail.orderDate) AND ym.m = MONTH((orderdetail.orderDate))
                    LEFT JOIN orders ON orders.orderId = orderdetail.id
                    LEFT JOIN products ON productId = products.idCategory_product
                    WHERE (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE())) OR (y<YEAR(CURDATE()) AND m>MONTH(CURDATE()))
                    GROUP BY y, m';
            $data = [];
            if ($result = mysqli_query($con, $sql)) {
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = $row;
                }   
                echo json_encode($data);        
            }
        }
        else if($_GET["chart"] == 'orders'){
            $sql = "SELECT y, m, SUM(CASE WHEN status = 'Mới' THEN 1 ELSE 0 END) AS new, SUM(CASE WHEN status = 'Đang giao hàng' THEN 1 ELSE 0 END) AS inprogress, SUM(CASE WHEN status = 'Đã nhận hàng' THEN 1 ELSE 0 END) AS finish
                    FROM (
                        SELECT y, m
                        FROM
                        (SELECT YEAR(CURDATE()) y UNION ALL SELECT YEAR(CURDATE())-1) years,
                        (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
                        UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
                        UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12) months) ym
                    LEFT JOIN orderdetail ON ym.y = YEAR(orderdetail.orderDate) AND ym.m = MONTH((orderdetail.orderDate))
                    WHERE (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE())) OR (y<YEAR(CURDATE()) AND m>MONTH(CURDATE()))
                    GROUP BY y, m";
            $data = [];
            if ($result = mysqli_query($con, $sql)) {
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = $row;
                }   
                echo json_encode($data);        
            }
        }
        else if($_GET["chart"] == 'products'){
            $sql = "SELECT `nameCategoryProduct`, COUNT(*) as number FROM products GROUP BY `nameCategoryProduct`";
            $data = [];
            if ($result = mysqli_query($con, $sql)) {
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = $row;
                }   
                echo json_encode($data);        
            }
        }
    }
    ?>
