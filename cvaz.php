<?php
    session_start();
    require_once 'db.php';
    require_once 'fun.php';
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
            <div class="fon_white">
                <h3>Правила/Связаться с нами</h3>
                <div class="line-1"></div>
                <div class="info-money">
                    <a href="#post-1" class="knopka-1-info">Правила</a>
                    <a href="#post-2" class="knopka-2-info">Как купить</a>
                    <a href="#post-3" class="knopka-3-info">Покупка не пришла</a>
                    <a href="#post-4" class="knopka-4-info">Связаться с нами</a>
                </div>
                <div class="cvaz-info-1" id="post-1">
                    <h3>Правила</h3>
                    <div class="line-1"></div>
                    <p class="info-money">
                        Мы несем полную ответственность за сохранность ваших данных, также мы ответственны за доставку<br>
                        ваших покупок. Наша команда оперативно реагирует на все проблемы и быстро их решают, чтобы<br>
                        ваше оружие, броня и игровая валюта были у вас. Если есть какие-то проблемы с доставкой товара,<br>
                        то мы возвращаем вам деньги и указываем проблему. Если вы хотите узнать конкретнее проблему,<br>
                        то напишите нам в VK, мы ответим вам и объясним.
                    </p>
                </div>
                <div class="cvaz-info-1" id="post-2">
                    <h3>Как происходит покупка товара</h3>
                    <div class="line-1"></div>
                    <p class="info-money">
                        1. Выбираем какой игравой предмет или валюту хотитим купить.<br>
                        2. Нажимаем на кнопку купить и у вас добавляется в корзину, то что вы решили купить.<br>
                        3. Потом вам надо будет выбрать способ обратной связи, чтобы уточнить важные моменты для получения покупки.<br>
                        4. Оплатить покупку при помощи онлайн оплаты.<br>
                        5. После покупки ожидайте обратной связи в течении часа после оплаты.<br>
                    </p>
                </div>
                <div class="cvaz-info-1" id="post-3">
                    <h3>Что делать если товар не пришёл к вам</h3>
                    <div class="line-1"></div>
                    <p class="info-money">
                        1. Проверить прошла ли оплата, мы можем вернуть деньги, если есть какие-то проблемы с товаром.<br>
                        2. Проверить есть ли на вашем аккаунте покупка или с вами связались, так как вы выбрали до оплаты товара<br>
                        3. Если два пункта выше сделали и у вас нет товара, то напишите Telegram человеку и предоставить скрины, что<br> 
                        покупка прошла.<br>
                        4. После проверки, с вами свяжутся в течение 30 минут и вам доставят вашу покупку. <br>
                    </p>
                </div>
                <div class="cvaz-info-1" id="post-4">
                    <h3>Связь с нами</h3>
                    <div class="line-1"></div>
                    <div class="cvaz-info-1-text">
                        <p class="info-money">
                            С нами вы можете связаться, через Telegram и VK. Мы оставляем <br>
                            ссылки на наши соцаильные сети, в них вы сможете задать свои<br>
                            вопросы. Ответ вам поступит в течение примерно 15-25минут.<br>
                            Также у нас в телеграмме, там вы можете прочитать или оставить<br> 
                            отзывы, а также посмотреть, какие новые товары были добавлены<br> 
                            на сайте. Иногда проводятся розыгрыши на различные игравые<br> 
                            предметы или валюту.
                        </p>
                        <div class="main_div_post-icon">
                            <a href="https://t.me/+YZ8rIVqRdg80YjAy" class="main_div_icon">
                                <img src="img/telegram_icon.png" alt="" width="75px" height="75px">
                            </a>
                            <a href="https://vk.com/public221060047" class="main_div_icon">
                                <img src="img/vk_icon.png" alt="" width="75px" height="75px">
                            </a>
                        </div>
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