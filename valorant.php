<?php
session_start();
require_once 'db.php';
require_once 'fun.php';
$products = get_products();
?>
<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="buy.css">
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
            <h2 style="margin-bottom:10px">Valorant</h2>
            <p class="main-div-3-text-1">VALORANT — это всемирно известный соревновательный тактический шутер<br> 
            с матчами 5 на 5, в котором грамотное применение умений, меткая стрельба и слаженная<br>
            командная работа помогут вам перехитрить, переиграть и затмить противника.
            <div class="main-div-3">
            <h3>Какие товары мы предоставляем</h3>
            <div class="line-1"></div>
            <div class="main-div-3-main">
                <div class="main-div-3-info">
                    <div class="main-div-3-block" style="border:none">
                        <img src="img/div_1_valorant.png" alt="" width="338px" height="507px" class="main-info-img">
                        <h3>Самые красивые скины на vandal</h3>
                        <p class="main-div-3-text-2">Мы предоставляем скины,<br> 
                        которые на данный<br> 
                        момент в ходят топ 10<br> 
                        самый красивых в этой игре.
                        </p>
                        <a href="vandal.php" class="knopka-1-header">Вандалы</a>
                    </div>
                    <div class="main-div-3-block" style="border:none">
                        <img src="img/div_2_valorant.png" alt="" width="338px" height="507px" class="main-info-img">
                        <h3>Самые красивые скины на knife</h3>
                        <p class="main-div-3-text-2">Мы предоставляем скины,<br> 
                        которые на данный момент<br> 
                        в ходят топ 10 самый<br> 
                        красивых в этой игре.
                        </p>
                        <a href="Knife.php" class="knopka-1-header">Ножи</a>
                    </div>
                    <div class="main-div-3-block" style="border:none">
                        <img src="img/div_3_valorant.png" alt="" width="338px" height="507px" class="main-info-img">
                        <h3>Самые лучшие коллекции скинов</h3>
                        <p class="main-div-3-text-2">Мы предоставляем коллекции<br>
                        скинов, которые самые<br> 
                        популярные в этой игре.
                        </p>
                        <a href="colletion.php" class="knopka-2-header">Сборка скинов</a>
                    </div>
                </div>
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
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="main.js"></script>
    </body>
</html>