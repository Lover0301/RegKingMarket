<?php
session_start();
require_once 'db.php';
require_once 'fun.php';
error_reporting(0);
$prof = prof();
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="korzina.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
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
        <h6>Личный кабинет</h6>
        <div class="line-1"></div>
        <h6>Здравствуйте, <?= $_SESSION['user']['Nickname'] ?>!</h6>
        <form class="form-profile">
            <div class="form-profile-div">
                <div class="form-prfile-1">
                    <img src="img/icons8-бизнесмен-50.png" alt="" wight="30px" height="30px">
                    <p style="margin-left:15px">Должность:</p>
                </div>
                <h3 style="margin: 10px 0;"><?= $_SESSION['user']['Post'] ?></h3>
            </div>
            
            <div class="form-profile-div">
                <div class="form-prfile-1">
                    <img src="img/icons8-контроллер-30.png" alt="" wight="30px" height="30px">
                    <p style="margin-left:15px">Логин:</p>
                </div>
                <h3 style="margin: 10px 0;"><?= $_SESSION['user']['Login'] ?></h3>
            </div>
            <div class="form-profile-div">
                <div class="form-prfile-1">
                    <img src="img/icons8-пользователь-48.png" alt="" wight="30px" height="30px">
                    <p style="margin-left:15px">Имя и фамилия:</p>
                </div>
                <h3><?= $_SESSION['user']['Nickname'] ?></h3>
            </div>
            <div class="form-profile-div">
                <div class="form-prfile-1">
                    <img src="img/icons8-телефон-50.png" alt="" wight="30px" height="30px">
                    <p style="margin-left:15px">Номер телефона:</p>
                </div>
                <h3 style="margin: 10px 0;"><?= $_SESSION['user']['Phone'] ?></h3>
            </div>
            <div class="button-profile">
                <?php if ($_SESSION['user']['Post'] == 'Админ'):?>
                <a href="admin.php" class="knopka-profile" style="margin-top: 20px;">Заказы</a>
                <?php else:?>
                <?php endif;?>
                <a href="logout.php" class="knopka-profile" style="margin-top: 20px;">Выход с аккаунта</a>
            </div>
        </form>
        <h6>Покупки</h6>
        <div class="line-1"></div>
        <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Сумма заказа(руб)</th>
                                <th scope="col">Время заказа</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prof as $profil):?>
                            <tr>
                                <td class="text-center"><p><?=$profil['Number_zakaz']?></p></td>
                                <td class="text-center"><?=$profil['Statys']?></td>
                                <td class="text-center"><?=$profil['Sum_price']?></td>
                                <td class="text-center"><?=$profil['Datetime']?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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