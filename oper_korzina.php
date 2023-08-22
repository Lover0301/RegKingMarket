<?php
    session_start();
    error_reporting(0);
    require_once 'fun.php';
    require "connect.php";
    $number_zakaz = rand(100000000, 999999999);
    $nickname = $_SESSION['user']['Nickname'];
    $login = $_SESSION['user']['Login'];
    $feedback = $_POST["course"];
    $price = $_SESSION['cart.sum'];
    $datetimes = date("H:i:s d.m.y"); 
    if ($feedback == ''){
        $_SESSION['message'] = 'Вы не выбрали способ обратной связи';
        header('Location: korzina.php');
    }
     else{
        mysqli_query($connect, "INSERT INTO zakaz (ID_Zakaz, Number_zakaz, Nickname, Login,feedback, Sum_price, Datetime) VALUES (NULL,'$number_zakaz', '$nickname','$login','$feedback', '$price','$datetimes')");
        $path = "Заказы/Выполняем проверки оплаты заказа/";
        $name_page =  $number_zakaz. '.html';
        $html = '
        <!DOCTYPE html>
        <html lang="RU">
        <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        Номмер заказа - '.$number_zakaz.'<br>
        Логин клиента - '.$_SESSION['user']['Login'].'<br>
        Имя и Фамилия клиента - '.$_SESSION['user']['Nickname'].'<br>
        Номер телефона клиента - '.$_SESSION['user']['Phone'].'<br>
        Способ обратной связи - '.$feedback.'<br>
        Время заказа - '.date("H:i:s d.m.y").'<br>
        Продукты на заказ:<br>
        ______________________________________________________<br>
        STALCRAFT<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['1']['title'].' '.$_SESSION['cart']['1']['price'].' '.$_SESSION['cart']['1']['qty'].'<br>
        '.$_SESSION['cart']['2']['title'].' '.$_SESSION['cart']['2']['price'].' '.$_SESSION['cart']['2']['qty'].'<br>
        '.$_SESSION['cart']['3']['title'].' '.$_SESSION['cart']['3']['price'].' '.$_SESSION['cart']['3']['qty'].'<br>
        '.$_SESSION['cart']['4']['title'].' '.$_SESSION['cart']['4']['price'].' '.$_SESSION['cart']['4']['qty'].'<br>
        '.$_SESSION['cart']['5']['title'].' '.$_SESSION['cart']['5']['price'].' '.$_SESSION['cart']['5']['qty'].'<br>
        '.$_SESSION['cart']['6']['title'].' '.$_SESSION['cart']['6']['price'].' '.$_SESSION['cart']['6']['qty'].'<br>
        '.$_SESSION['cart']['7']['title'].' '.$_SESSION['cart']['7']['price'].' '.$_SESSION['cart']['7']['qty'].'<br>
        '.$_SESSION['cart']['8']['title'].' '.$_SESSION['cart']['8']['price'].' '.$_SESSION['cart']['8']['qty'].'<br>
        '.$_SESSION['cart']['9']['title'].' '.$_SESSION['cart']['9']['price'].' '.$_SESSION['cart']['9']['qty'].'<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['10']['title'].' '.$_SESSION['cart']['10']['price'].' '.$_SESSION['cart']['10']['qty'].'<br>
        '.$_SESSION['cart']['11']['title'].' '.$_SESSION['cart']['11']['price'].' '.$_SESSION['cart']['11']['qty'].'<br>
        '.$_SESSION['cart']['12']['title'].' '.$_SESSION['cart']['12']['price'].' '.$_SESSION['cart']['12']['qty'].'<br>
        '.$_SESSION['cart']['13']['title'].' '.$_SESSION['cart']['13']['price'].' '.$_SESSION['cart']['13']['qty'].'<br>
        '.$_SESSION['cart']['14']['title'].' '.$_SESSION['cart']['14']['price'].' '.$_SESSION['cart']['14']['qty'].'<br>
        '.$_SESSION['cart']['15']['title'].' '.$_SESSION['cart']['15']['price'].' '.$_SESSION['cart']['15']['qty'].'<br>
        '.$_SESSION['cart']['16']['title'].' '.$_SESSION['cart']['16']['price'].' '.$_SESSION['cart']['16']['qty'].'<br>
        '.$_SESSION['cart']['17']['title'].' '.$_SESSION['cart']['17']['price'].' '.$_SESSION['cart']['17']['qty'].'<br>
        '.$_SESSION['cart']['18']['title'].' '.$_SESSION['cart']['18']['price'].' '.$_SESSION['cart']['18']['qty'].'<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['19']['title'].' '.$_SESSION['cart']['19']['price'].' '.$_SESSION['cart']['19']['qty'].'<br>
        '.$_SESSION['cart']['20']['title'].' '.$_SESSION['cart']['20']['price'].' '.$_SESSION['cart']['20']['qty'].'<br>
        '.$_SESSION['cart']['21']['title'].' '.$_SESSION['cart']['21']['price'].' '.$_SESSION['cart']['21']['qty'].'<br>
        ______________________________________________________<br>
        VALORANT<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['22']['title'].' '.$_SESSION['cart']['22']['price'].' '.$_SESSION['cart']['22']['qty'].'<br>
        '.$_SESSION['cart']['23']['title'].' '.$_SESSION['cart']['23']['price'].' '.$_SESSION['cart']['23']['qty'].'<br>
        '.$_SESSION['cart']['24']['title'].' '.$_SESSION['cart']['24']['price'].' '.$_SESSION['cart']['24']['qty'].'<br>
        '.$_SESSION['cart']['25']['title'].' '.$_SESSION['cart']['25']['price'].' '.$_SESSION['cart']['25']['qty'].'<br>
        '.$_SESSION['cart']['26']['title'].' '.$_SESSION['cart']['26']['price'].' '.$_SESSION['cart']['26']['qty'].'<br>
        '.$_SESSION['cart']['29']['title'].' '.$_SESSION['cart']['29']['price'].' '.$_SESSION['cart']['29']['qty'].'<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['30']['title'].' '.$_SESSION['cart']['30']['price'].' '.$_SESSION['cart']['30']['qty'].'<br>
        '.$_SESSION['cart']['31']['title'].' '.$_SESSION['cart']['31']['price'].' '.$_SESSION['cart']['31']['qty'].'<br>
        '.$_SESSION['cart']['32']['title'].' '.$_SESSION['cart']['32']['price'].' '.$_SESSION['cart']['32']['qty'].'<br>
        '.$_SESSION['cart']['33']['title'].' '.$_SESSION['cart']['33']['price'].' '.$_SESSION['cart']['33']['qty'].'<br>
        '.$_SESSION['cart']['34']['title'].' '.$_SESSION['cart']['34']['price'].' '.$_SESSION['cart']['34']['qty'].'<br>
        '.$_SESSION['cart']['35']['title'].' '.$_SESSION['cart']['35']['price'].' '.$_SESSION['cart']['35']['qty'].'<br>
        ______________________________________________________<br>
        '.$_SESSION['cart']['36']['title'].' '.$_SESSION['cart']['36']['price'].' '.$_SESSION['cart']['36']['qty'].'<br>
        '.$_SESSION['cart']['37']['title'].' '.$_SESSION['cart']['37']['price'].' '.$_SESSION['cart']['37']['qty'].'<br>
        '.$_SESSION['cart']['38']['title'].' '.$_SESSION['cart']['38']['price'].' '.$_SESSION['cart']['38']['qty'].'<br>
        '.$_SESSION['cart']['39']['title'].' '.$_SESSION['cart']['39']['price'].' '.$_SESSION['cart']['39']['qty'].'<br>
        '.$_SESSION['cart']['40']['title'].' '.$_SESSION['cart']['40']['price'].' '.$_SESSION['cart']['40']['qty'].'<br>
        '.$_SESSION['cart']['41']['title'].' '.$_SESSION['cart']['41']['price'].' '.$_SESSION['cart']['41']['qty'].'<br>
        '.$_SESSION['cart']['42']['title'].' '.$_SESSION['cart']['42']['price'].' '.$_SESSION['cart']['42']['qty'].'<br>
        '.$_SESSION['cart']['43']['title'].' '.$_SESSION['cart']['43']['price'].' '.$_SESSION['cart']['43']['qty'].'<br>
        '.$_SESSION['cart']['44']['title'].' '.$_SESSION['cart']['44']['price'].' '.$_SESSION['cart']['44']['qty'].'<br>
        ______________________________________________________<br>
        Всего товаров - '.$_SESSION['cart.qty'].'<br>
        Общая ценна корзины - '.$_SESSION['cart.sum'].'<br>
        </body>
        </html>
        ';
        $write = @file_put_contents($path.$name_page, $html);
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.sum']);
        header('Location: oshidanie_zakaz.php');
    }
?>