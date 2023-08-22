<?php
    function debug(array $data): void{
        echo '<pre>' .print_r($data, 1).'</pre>';
    }
    function prof(): array
    {
        global $pdo;
        $nick = $_SESSION['user']['Nickname'];
        $login = $_SESSION['user']['Login'];
        $res = $pdo->query("SELECT * FROM zakaz WHERE Nickname = '$nick' AND Login = '$login'");
        return $res->fetchAll();
    }
    function get_products(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Weapon')");
        return $res->fetchAll();
    }
    function get_products_1(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Brona')");
        return $res->fetchAll();
    }
    function get_products_2(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Money')");
        return $res->fetchAll();
    }
    function get_products_3(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Vandal')");
        return $res->fetchAll();
    }
    function get_products_4(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Knife')");
        return $res->fetchAll();
    }
    function get_products_5(): array
    {
        global $pdo;
        $res = $pdo->query("SELECT * FROM products WHERE Tip = ('Collection')");
        return $res->fetchAll();
    }
    function get_product(int $id): array
        {
            global $pdo;
            $stmt = $pdo->prepare("SELECT * FROM products WHERE ID_Products = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
    function add_to_cart($product): void
    {
        if(isset($_SESSION['cart'][$product['ID_Products']])){
            $_SESSION['cart'][$product['ID_Products']]['qty'] +=1;
        } else{
            $_SESSION['cart'][$product['ID_Products']] = [
                'title' => $product['Title'],
                'price' => $product['Price'],
                'qty' => 1,
            ];
        }
        $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
        $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['Price'] : $product['Price'];
    }
?>