<?php
    session_start();
?>
<!DOCTYPE html>

<head>
    <title>ХАССП-вход</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/stile-log.css">
    <link rel="stylesheet" href="assets/css/media-log.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="main-top">
                <div class="logo">
                    <a href="#">
                        <img src="assets/img/logo.jpg" alt="логотип">
                    </a>
                </div>
                <div class="right-panel">
                    <div class="header-top">
                        <a href="#">
                            <img src="assets/img/letter.svg" alt="почта">
                        </a>
                        <a href="#">
                            <img src="assets/img/placeholder.svg" alt="место нахождение">
                        </a>
                        <a href="#">
                            <img src="assets/img/call.svg" alt="звонок">
                        </a>
                        <a class="media-none" href="#">
                            <p>+7 000 000 00 00</p>
                        </a>
                        <a href="#">
                            <img src="assets/img/magnifying-glass.svg" alt="поиск">
                        </a>
                        <a class="btnlogo" href="log.php">
                            <img src="assets/img/user.svg" alt="вход">
                            <p>Войти</p>
                        </a>
                        <a class="menu-link" href="#">
                            <span></span></a>
                    </div>
                    <nav class="header-down menu_ul">
                        <ul>
                            <li><a href="#">КУРСЫ</a></li>
                            <li><a href="#">ОБ УНИВЕРСИТЕТЕ</a></li>
                            <li><a href="#">ПРЕПОДАВАТЕЛИ</a></li>
                            <li><a href="#">ОТЗЫВЫ</a></li>
                            <li><a href="#">КОНТАКТЫ</a></li>
                            <div class="plus-infornation">
                                <a href="#"><img src="assets/img/letter.svg" class="svgfilter">
                                    <p>U@rosinter.ru</p>
                                </a></li>
                                <a href="#"><img src="assets/img/placeholder.svg" class="svgfilter">
                                    <p>Москва, ул. Душинская, д. 7, стр.1</p>
                                </a></li>
                                <div class="menu-search">
                                    <form action>
                                        <input class="search-text" type="text" placeholder="Поиск...">
                                        <input type="submit" value class="search-submit">
                                    </form>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="background-menu">
        <div class="container">
            <div class="log-panel">
                <form action="include/signin.php" method="post">
                    <label>Логин</label>
                    <input type="text" placeholder="Введите логин" name="login">
                    <label>Пароль</label>
                    <input type="password" placeholder="Введите пароль" name="password">
                    <button>Войти</button>
                    <a href="registration.php">Создать аккаунт</a>
                    <?php 
                        if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                        }
                        unset($_SESSION['message'])
                    ?>
                </form>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="map-left">
            <div class="map-left-info">

            </div>
            <div class="map-text">

                <div class="about-content">
                    <a href="#"><img src="assets/img/logo.jpg" alt="логотип"></a>
                    <p>КОНТАКТЫ</p>
                    <div class="phone">
                        <img src="assets/img/call.svg" alt="звонок">
                        <p>+7 000 000 00 00</p>
                    </div>
                    <div class="mail">
                        <img src="assets/img/letter.svg" alt="почта">
                        <p>info@mail.ru </p>
                    </div>
                </div>
                <div class="address">
                    <p><strong>Наш адрес:</strong><br>
                        Москва, ул. Ленина, д. 7, стр. 1</p>
                </div>
            </div>
        </div>
        <div class="map-right">
            <iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A9c4a5233c4fd0710ec2fe554f81c1106df8059cec01efa0fce7ac9624672aba2&amp;source=constructor"
                width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="text-footer">
                <div class="pol">
                    <a href="#">Политика конфиденциальности</a>
                </div>
                <div class="date">
                    <p>© 2000 — 2019 «Росинтер Ресторантс» <br>
                        Все права защищены.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>