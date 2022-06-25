<!DOCTYPE html>

<head>
    <title>ХАССП</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media.css">
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
                        <a href="#"><?= $_SESSION['user']['full_name']?></a>
                        <a class="btnlogo" href="intent.php">
                            <img src="assets/img/user.png" alt="профиль">
                            <p>Выйти</p>
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
            <div class="head-about">
                <h1><span>ХАССП</span> как<br>
                    конкурентное преимущество</h1>
            </div>
            <div class="head-about-text">
                <p>ХАССП (HACCP — Hazard Analysis and Critical Control Point) — анализ рисков и контроль критических
                    точек.
                    Основа производства безопасной пищевой продукции.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="threeimg">
            <div class="first">
                <h5>Очно</h5>
                <p>Занятия проводятся по запросу и в зависимости от загруженности эксперта. Уникальная возможность
                    задать все волнующие вопросы.</p>
                <div class="bntdetail">
                    <a href="#">Узнать подробнее</a>
                </div>
            </div>
            <div class="second">
                <h5>Вебинар</h5>
                <p>Полный курс - серия вебинаров из
                    6 модулей.</p>
                <div class="bntdetail">
                    <a href="#">Узнать подробнее</a>
                </div>
            </div>
            <div class="third">
                <h5>Онлайн-курс</h5>
                <p>Экономично и удобно! Полная информаця по ХАССП в любое время.</p>
                <div class="bntdetail">
                    <a href="#">Узнать подробнее</a>
                </div>
            </div>
        </div>
        <div class="first-floor">
            <div class="for-who">
                <h4>ДЛЯ КОГО:</h4>
                <div class="icons-text">
                    <div class="for-who-about">
                        <img src="assets/img/security.svg">
                        <p>Директор
                            по качеству</p>
                    </div>
                    <div class="for-who-about">
                        <img src="assets/img/chemistry.svg">
                        <p>Начальник
                            лаборатории</p>
                    </div>
                    <div class="for-who-about">
                        <img src="assets/img/researcher.svg">
                        <p>Специалист
                            по качеству</p>
                    </div>
                    <div class="for-who-about">

                        <img src="assets/img/manager.svg">
                        <p>Начальник
                            производства</p>
                    </div>
                    <div class="for-who-about">
                        <img src="assets/img/manager.svg">
                        <p>Главный технолог</p>
                    </div>
                    <div class="another">
                        <img src="assets/img/manager.svg">
                        <p>Иные сотрудники предприятий</p>
                    </div>
                </div>
            </div>
            <div class="expert">
                <h4>
                    ПРЕПОДАВАТЕЛЬ –ЭКСПЕРТ:
                </h4>
                <div class="information-expert">
                    <div class="icon-expert">
                        <img src="assets/img/experticon.jpg">
                    </div>
                    <div class="name-about">
                        <h6>Ольга Заваловская </h6>
                        <p>старший менеджер по качеству департамента закупок и логистики ООО «Росинтер Ресторантс».
                        </p>
                        <div class="none">
                            <a href="#">Узнать подробне</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-floor">
            <div class="documents">
                <h4>Выдаваемые документы: </h4>
                <p>Сертификат о прохождении обучения темы (название одного
                    из модулей).</p>
                <div class="sertificate">
                    <img src="assets/img/sertificate.jpg">
                </div>
                <p>Удостоверение о краткосрочном повышении квалификации</p>
                <div class="identityCard">
                    <img src="assets/img/docidentity.jpg">
                </div>
            </div>
            <div class="table-about">
                <h4>Что дает внедрение ХАССП: </h4>
                <table>
                    <tr>
                        <th>Внутренние преимущества</th>
                        <th>Внешние
                            преимущества</th>
                        <th>Экономические</th>
                        <th>Репутационные</th>
                    </tr>
                    <tr>
                        <td>Обнаружение слабых
                            мест на предприятии
                            через анализ рисков</td>
                        <td>Повышение
                            доверия
                            потребителя к
                            производителю и
                            его продукции</td>
                        <td>Экономия за счет снижение
                            количества брака
                            (предотвращение брака-
                            бесплатно, работа с
                            браком-убытки)</td>
                        <td>Имидж компании
                            как надежного
                            партнера-
                            производителя
                            качественной и
                            безопасной
                            продукции</td>
                    </tr>
                    <tr>
                        <td>Переход от
                            корректирующих мер
                            к предупреждающим
                            (работа на
                            предотвращение
                            брака, а не на поиски
                            виновных при
                            появлении брака)</td>
                        <td>Снижение жалоб
                            потребителей за
                            счет повышения
                            стандартов
                            качества и
                            безопасности</td>
                        <td>Повышение
                            конкурентноспособности за
                            счет признания системы
                            ХАССП на рынке</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Прозрачность
                            процесса и
                            назначение
                            ответственных.</td>
                        <td></td>
                        <td>Повышение
                            инвестиционной
                            привлекательности за счет
                            улучшенных показателей
                            (минимум брака, статус «ХАССП» и т.д.)</td>
                        <td></td>
                    </tr>
                </table>
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

    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>