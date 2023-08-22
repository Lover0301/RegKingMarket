<?php

    $connect = mysqli_connect('localhost', 'root', '', 'regkingmarket');
    mysqli_set_charset($connect,'utf8');
    if (!$connect) {
        die('Ошибка в подключении к базе данных');
    }