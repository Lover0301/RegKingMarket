<?php
    session_start();
    require_once 'connect.php';
    $login = $_POST['login'];
    $nickname = $_POST['nickname'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]);
    if ($login == ''){
        $_SESSION['message'] = 'Вы не ввели ваш логин';
        header('Location: reg.php');
    } else{
        if ($nickname == ''){
            $_SESSION['message'] = 'Вы не ввели ваше имя и фамилию';
            header('Location: reg.php');
        } else{
            if ($phone == ''){
                $_SESSION['message'] = 'Вы не ввели ваш номер телефона';
                header('Location: reg.php');
            } else{
                if ($password == ''){
                    $_SESSION['message'] = 'Вы не ввели пароль';
                    header('Location: reg.php');
                } else{
                        mysqli_query($connect, "INSERT INTO `Users` (`ID_User`, `Post`,`Login`, `Nickname`, `phone`, `Password`) VALUES (NULL,'Пользователь','$login', '$nickname', '$phone','$password')");
                        $_SESSION['message'] = 'Регистрация прошла успешно!';
                        header('Location: auth.php');
                    }
                }
            }
        }
?>