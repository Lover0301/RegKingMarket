<?php
session_start();
require_once 'db.php';
require_once 'fun.php';
?>
<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="korzina.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>RegKingMarket</title>
</head>
<body>
<header>
    <div class="header-body">
        <a href="index.php">
            <img src="img/logo(1).png" alt="">
        </a>
  <div class="header-button">
    <div class="dropdown">
      <a href="stalcraft.php"><button class="dropbtn">STALCRAFT</button></a>
      <div class="dropdown-content">
        <a href="weopan.php">Оружие</a>
        <a href="brony.php">Броня</a>
        <a href="money.php">Игровая валюта</a>
      </div>
    </div>
      <div class="dropdown">
        <a href="valorant.php"><button class="dropbtn">Valorant</button></a>
        <div class="dropdown-content">
          <a href="vandal.php">Вандалы</a>
          <a href="knife.php">Ножи</a>
          <a href="collection.php">Сборка скинов</a>
        </div>
      </div>
      <a href="cvaz.php" class="header-a-button"><button class="header-a">Правила/Связь с нами</button></a>
    </div>
    <div class="header-button">
        <?php if (!empty($_SESSION['user'])):?>
        <a href="auth.php">
            <button class="open-popup-2"><img src="img/free-icon-user-1144760.png" alt="" width="30px" height="30px" style="margin-right:5px;">Профиль</button>
        </a>
        <?php else:?>
        <a href="auth.php">
            <button class="open-popup"><img src="img/free-icon-user-1144760.png" alt="" width="30px" height="30px" style="margin-right:5px;">Авторизация</button>
        </a>
        <?php endif;?>
        <a href="korzina.php" class="header-korzina-a">
            <?php if (!empty($_SESSION['user'])):?>
            <button class="header-korzina">
                <img src="img/free-icon-tool-58271.png" alt="" width="30px" height="30px" style="margin-right:5px;">Корзина 
                <?php if (!empty($_SESSION['cart'])):?>
                <p><?=$_SESSION['cart.qty']?></p>
                <?php else:?>
                <p>0</p>
                <?php endif;?> 
                <?php else:?>
                <?php endif;?> 
                </button>
            </a>
        </div>
        </header>
  <main>
    <a href="profile.php" class="back-profile">Назад</a>
    <h6>Заказы</h6>
    <p>Статусы:</p>
    <div class="modal-body" style="margin-top:50px;margin-bottom:102px;">
        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Выполняем проверки оплаты заказа</th>
                                    <th scope="col">Заказ доставлен</th>
                                    <th scope="col">Заказ отменен</th>
                                    <th scope="col">Поиск покупателя в игре</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><?php 
                                    $dir = 'Заказы/Выполняем проверки оплаты заказа/';
                                    $array = scandir($dir);
                                    for($i=0;$i < count($array);$i++)
                                    {
                                        if(substr_count($array[$i], 'html'))
                                        {
                                            echo '<a href="'.$dir.$array[$i].'"target="_blank" class="zakaz_href">'.$array[$i].'</a>'."<br>\n";
                                        }
                                    }
                                            ?></td>
                                    <td class="text-center"><?php 
                                    $dir = 'Заказы/Заказ доставлен/';
                                    $array = scandir($dir);
                                    for($i=0;$i < count($array);$i++)
                                    {
                                        if(substr_count($array[$i], 'html'))
                                        {
                                            echo '<a href="'.$dir.$array[$i].'"target="_blank" class="zakaz_href">'.$array[$i].'</a>'."<br>\n";
                                            }
                                    }
                                    ?></td>
                                    <td class="text-center"><?php 
                                    $dir = 'Заказы/Заказ отменен/';
                                    $array = scandir($dir);
                                    for($i=0;$i < count($array);$i++)
                                    {
                                        if(substr_count($array[$i], 'html'))
                                        {
                                            echo '<a href="'.$dir.$array[$i].'"target="_blank" class="zakaz_href">'.$array[$i].'</a>'."<br>\n";
                                        }
                                    }
                                    ?></td>
                                    <td class="text-center"><?php 
                                    $dir = 'Заказы/Поиск игрока в игре/';
                                    $array = scandir($dir);
                                    for($i=0;$i < count($array);$i++)
                                    {
                                        if(substr_count($array[$i], 'html'))
                                        { 
                                            echo '<a href="'.$dir.$array[$i].'"target="_blank" class="zakaz_href">'.$array[$i].'</a>'."<br>\n";
                                        }
                                    }
                                    ?></td>
                                </tr>
                            </tbody>
                        </table>
        </div>
  </main>
  <footer>
      <p class="footer-text"> © 2023 RegKingMarket Все права защищены.</p>
      <div class="footer-menu">
      <div class="dropdown">
          <a href="stalcraft.php"><button class="dropbtn-1">STALCRAFT</button></a>
      </div>
      <div class="dropdown">
          <a href="valorant.php"><button class="dropbtn-1">Valorant</button></a>
      </div>
          <a href="cvaz.php" class="header-a-button"><button class="header-a-1">Правила/Связь с нами</button></a>
      </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="main.js"></script>
</body>
</html>