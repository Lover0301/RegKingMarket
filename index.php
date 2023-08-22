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
    <div class="main-div-1">
        <div class="main-div-div-1">
          <p class="main-text-1">Продажа предметов и игровой валюты</p>
          <h2>RegKingMarket</h2>
      </div>
      <div class="main-div-1-operty"></div>
      <p class="main-text-2">У нас вы сможете купить игровые предметы<br> и игровую валюту по самой оптимальной цене.</p>
    </div>
    <div class="main-div-2">
        <h3>Последние новости</h3>
        <div class="line-1"></div>
      <div class="slider">
      
        <div class="slider-line">
          <a href="vandal.php">
            <img class="popup-img last-item" src="img/slaider-1.jpg" width="1300px" height="600px">
          </a>
          <a href="stalcraft.php">
            <img class="popup-img last-item" src="img/slaider-2.png" width="1300px" height="600px">
          </a>
          <a href="money.php">
            <img class="popup-img last-item" src="img/slaider-3.png" width="1300px" height="600px">
          </a>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
    <div class="main-div-3">
      <h3>Какие товары мы предоставляем</h3>
      <div class="line-1"></div>
      <div class="main-div-3-main">
        <p class="main-div-3-text-1">
          На данный момент можем предложить: 
        </p>
        <div class="main-div-3-info">
          <div class="main-div-3-block">
            <img src="img/info-1.png" alt="">
            <p class="main-div-3-text-2">Самые топовые оружия и броню,<br> а также игровую валюту по игре STALCRAFT</p>
          </div>
          <div class="main-div-3-block">
            <img src="img/info-2.png" alt="">
            <p class="main-div-3-text-2">Скины на некоторые оружия из игры Valorant,<br> а также линейки скинов</p>
          </div>
        </div>
      </div>
    </div>
    <div class="main-div-4">
      <h3>Самый популярный отзыв</h3>
      <div class="line-1"></div>
      <p class="main-div-4-text">"Магазин очень хороший, 5кк валюты прислали почти<br> 
        сразу комиссию с аукциона взяли на себя также прислали <br>
        по почте подарок в честь моего дня рождения))<br>
        Всем рекомендую покупать именно у них!!"
      </p>
      <img src="img/afa_koment.png" alt="" width="50px" height="50px">
      <p class="main-div-4-text">Андрей Иванов</p>
    </div>
    <div class="main-div-5">
      <h3>О нас</h3>
      <div class="line-1"></div>
      <div class="main-div-5-main">
        <div class="main-div-5-block-text">
          <p class="main-div-5-text">
            Наша команда старается сделать атмосферу в играх<br>более приятной для игроков. 
          </p>
          <p class="main-div-5-text">
            Мы продаем различные предметы из игры, а также<br> игровую валюту и все это по самой оптимальной цене.<br>
            Все покупки будут осуществляться за реальные деньги. Если есть<br> 
            вопросы, то можете перейти на другую страницу<br> "Правила/Связаться с нами"
            там вы сможете задать вопрос.
          </p>
        </div>
        <img src="img/123.png" alt="" class="main-div-5-img">
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="main.js"></script>
</body>
</html>