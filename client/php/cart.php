<?php
    session_start();
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $name = $_POST['shoe_item'];
        $quantity = $_POST['add'];
        $size = $_POST['size'];
        $price = $_POST['amount'];
        $image = $_POST['image'];
        $flag = 0;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i][0] == $id && $_SESSION['cart'][$i][5] == $size) {
                $_SESSION['cart'][$i][2] += $quantity;
                $flag = 1;
                break;
            }
        }
        if ($flag == 0) {
            $item = [$id, $name, $quantity, $price, $image, $size];
            $_SESSION['cart'][] = $item;
        }
        //var_dump($_SESSION['cart']);
    }
    if (isset($_POST['delId']) && !empty(trim($_POST['delId']))) {
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i][0] == $_POST['delId'] && $_SESSION['cart'][$i][5] == $_POST['delSize']) {
                array_splice($_SESSION['cart'], $i, 1);
                echo json_encode([$_POST['delId'], getTotal(), $_POST['delSize']]);
                break;
            }
        }
    }
    if (isset($_POST['plusId']) && !empty(trim($_POST['plusId']))) {
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i][0] == $_POST['plusId'] && $_SESSION['cart'][$i][5] == $_POST['plusSize']) {
                $_SESSION['cart'][$i][2]++;
                echo json_encode([$_POST['plusId'], $_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][3], getTotal(), $_POST['plusSize']]);
                break;
            }
        }
    }
    if (isset($_POST['minusId']) && !empty(trim($_POST['minusId']))) {
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i][0] == $_POST['minusId'] && $_SESSION['cart'][$i][5] == $_POST['minusSize']) {
                $_SESSION['cart'][$i][2]--;
                echo json_encode([$_POST['minusId'], $_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][3], getTotal(), $_POST['minusSize']]);
                break;
            }
        }
    }
    function showMiniCart()
    {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                echo 
                '<li class="sbmincart-item sbmincart-item-changed">            
                    <div class="sbmincart-details-name">                
                        <a class="sbmincart-name" href="../single.php?id='.$_SESSION['cart'][$i][0].'">'.$_SESSION['cart'][$i][1].'</a>
                    </div>            
                    <div class="sbmincart-details-quantity">
                        <input data-id="'.$_SESSION['cart'][$i][0].'" class="sbmincart-quantity" data-sbmincart-idx="0" name="quantity_1" type="text" pattern="[0-9]*" value="'.$_SESSION['cart'][$i][2].'" autocomplete="off">            
                    </div>            
                    <div class="sbmincart-details-remove">                
                        <button type="button" class="sbmincart-remove" data-sbmincart-idx="0">×</button>            
                    </div>            
                    <div class="sbmincart-details-price">                
                        <span class="sbmincart-price">'.number_format($_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][2], 0, ',', '.').'</span>            
                    </div>                
                </li>';
            }
        }
    }
    function getTotal(){
        $total = 0;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            $total += $_SESSION['cart'][$i][3]*$_SESSION['cart'][$i][2];
        }
        return $total;
    }
?>
