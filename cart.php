<?php
    session_start();
    require_once 'db.php';
    require_once 'fun.php';
    if (isset($_GET['cart'])){
        switch($_GET['cart']){
            case 'add': 
                $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
                $product = get_product($id);
                add_to_cart($product);
                ob_start();
                $cart = ob_get_clean();
                echo json_encode(['code' => 'ok', 'answer' => $cart]);
                break;
            case 'clear':
                if (!empty($_SESSION['cart'])){
                    unset($_SESSION['cart']);
                    unset($_SESSION['cart.sum']);
                    unset($_SESSION['cart.qty']);
                }         
        }
        
    }
?>