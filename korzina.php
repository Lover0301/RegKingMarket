<?php
    session_start();
    require_once 'db.php';
    require_once 'fun.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="auth.css">
        <link rel="stylesheet" href="korzina.css">
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
            <div class="main-div-vid-korzina">
                <h6>Корзина</h6>
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="modal-body">
                <?php if (!empty($_SESSION['cart'])):?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Цена(руб)</th>
                                <th scope="col">Кол-во</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $id => $item):?>
                            <tr>
                                <td class="text-center"><p><?=$item['title']?></p></td>
                                <td class="text-center"><?=$item['price']?></td>
                                <td class="text-center"><?=$item['qty']?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4" align="right" class="text-right">Товаров: <span id="modal-cart-qty"><?=$_SESSION['cart.qty']?></span> <br> Сумма:<?=$_SESSION['cart.sum']?> руб.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php else:?>
                </div>
                    <h3>Коризна пуста</h3>
                <?php endif;?>    
                <div class="modal-footer">
                        <?php if (!empty($_SESSION['cart'])):?>
                        <button type="button" class="btn-danger" id="clear-cart">Очистить корзину</button>
                        <?php else:?>
                        <?php endif;?>   
                </div>
            </div>
            <div class="delivery-info">  
                <form class="collapsible-content__form" action="oper_korzina.php" method="post">
                    <p>Способ обратной связи:</p>
                    <div class="form__item">
                        <input class="form__input" type="radio" id="VK" name="course" value="VK">
                        <label for="VK">
                            Вконтакте
                        </label>
                    </div>
                    <div class="form__item">
                        <input class="form__input" type="radio" id="Telegram" name="course" value="Telegram">
                        <label for="Telegram">
                            Telegram
                        </label>
                    </div>
                    <div class="form__item">
                        <input class="form__input" type="radio" id="Call" name="course" value="Call">
                        <label for="Call">
                            Звонок по номеру телефона
                        </label>
                    </div>
                    <div class="form__item">
                        <input class="form__input" type="radio" id="SMS" name="course" value="SMS">
                        <label for="SMS">
                            СМС на номер телефона
                        </label>
                    </div>
                    <?php if (!empty($_SESSION['cart'])):?>
                    <button type="submit" id="main-button" class="main-button">Оформить заказ</button>
                </form>
            </div>
            <?php else:?>
                <p class="msg" style="margin-top: 20px; margin-bottom: 20px;">Добавте что-то в корзину</p>
            <?php endif;?>  
            <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
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