<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `Login` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        if(password_hash($_POST['password'],$user['password'])){
            $_SESSION['user'] = [
                "ID_User" => $user['ID_User'],
                "Post" => $user['Post'],
                "Login" => $user['Login'],
                "Nickname" => $user['Nickname'],
                "Phone" => $user['phone'],
            ];
            header('Location: profile.php');
        } else
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: auth.php');
    }
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: auth.php');
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>