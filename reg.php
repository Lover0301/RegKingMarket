<?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }

?>
<!DOCTYPE html>
<html lang="RU">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="korzina.css">
        <link rel="stylesheet" type="text/css" href="auth.css">
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
            <h6 class="h7">Регистрация</h6>
            <div class="line-1"></div>
            <div class="form-shadow">
                <form action="signup.php" method="post" class="form-flex-1">
                    <div class="form-div-1" style="justify-content: space-between;">
                        <img src="img/icons8-пользователь-48.png" alt="" wight="30px" height="30px">
                        <label>Логин</label>
                        <input class="div-input-1" type="text" name="login" minlength="6" placeholder="Введите свой логин">
                    </div>
                    <div class="form-div-1" style="justify-content: space-between;">
                        <img src="img/icons8-пользователь-48.png" alt="" wight="30px" height="30px">
                        <label>Имя и Фамилию</label>
                        <input  class="div-input-1"type="text" name="nickname"  minlength="6" placeholder="Введите ваше имя и фимилию">
                    </div>
                    <div class="form-div-1" style="justify-content: space-between;">
                        <img src="img/icons8-телефон-50.png" alt="" wight="30px" height="30px">
                        <label>Номер телефона</label>
                        <input  class="div-input-1"type="text" name="phone"  minlength="11" maxlength="12" placeholder="Введите ваш номер телефона">
                    </div>
                    <div class="form-div-1" style="justify-content: space-between;">
                        <img src="img/icons8-замок-50.png" alt="" wight="30px" height="30px">
                        <label>Пароль</label>
                        <input class="div-input-1" type="password" name="password" minlength="6" placeholder="Введите пароль">
                    </div>
                    <div class="form-div-1" style="justify-content: space-between;">
                        <button type="submit" class="main-button-1">Войти</button>
                        <p class="form-text">
                            У вас уже есть аккаунт? - <a href="auth.php" class="auth-button">Авторизация</a>!
                        </p>
                    </div>
                    <?php
                        if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                </form>
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