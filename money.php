<?php
session_start();
require_once 'db.php';
require_once 'fun.php';
error_reporting(0);
$products = get_products_2();
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
            <h3>STALCRAFT</h3>
            <h3>Игровая валюта</h3>
            <div class="line-1"></div>
            <div class="info-money">
                <p class="info-pokypka-2">Осталось:</p><h2 style="margin-bottom:20px; margin-top:20px">100 000 000</h2><p class="info-pokypka-2">  валюты</p>
            </div>
            <div class="main-div-1-weopan">
                <?php if (!empty($products)): ?>
                <?php foreach ($products as $product):?>
                <div class="main-div-1-pokypka">
                    <img src="img/товары/<?= $product['IMG']?>" alt="<?=$product['Title']?>" class="oryshie-img" width="320px" height="200px">
                    <div class="main-info-pokypka">
                        <h5><?=$product['Title']?></h5>
                        <p class="info-pokypka"><?= $product['Price']?><img src="img/icons8-рубль-48.png" alt="" width="20px" height="20px"></p>
                    </div>
                    <?php if (!empty($_SESSION['user'])):?>
                    <a class="pokypka-button add-to-cart" href="?cart=add&id=<?= $product['ID_Products'] ?>" data-id="<?= $product['ID_Products'] ?>">Купить</a>
                    <?php else:?>
                    <?php endif;?> 
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
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