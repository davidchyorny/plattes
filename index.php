

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plattes - бренд якісного молодіжного одягу.</title>
    <link rel="shortcut icon" href="./images/favicon/favicon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Media -->
    <link rel="stylesheet" href="./css/media/media.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <div id="preloader" class="preloader">
        <div class="spinner"></div>
    </div>


    <script>
        window.addEventListener('load', function() {
            // Полная загрузка контента, скройте предзагрузку и отобразите основной контент
            document.getElementById('preloader').style.display = 'none';
        });
    </script>


    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    if (isset($success)) {
        foreach ($success as $success) {
            echo '<div class="success" onclick="this.remove();">' . $success . '</div>';
        }
    }
    ?>

    <nav class="nav ">
        <div class="container">
            <div class="nav-row">
                <ul class="nav-list">
                    <li class="nav-list__item"><a href="./client/nav/about/about.php" class="nav-list__link">Про нас</a>
                    </li>
                    <li class="nav-list__item"><a href="./client/nav/delivery/delivery.php" class="nav-list__link">Доставка, оплата, повернення</a></li>
                </ul>

                <ul class="nav-tel">
                    <li class="nav-tel__item"><img src="./images/nav/tel.png" alt="tel" srcset=""></li>
                    <a href="tel:+380679473511">
                        <li class="nav-tel__item">067 947-35-11</li>
                    </a>
                    <a href="tel:+380679473511">
                        <li class="nav-tel__item">067 947-35-11</li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>



    <header class="header">
        <div class="container">
            <div class="header-row">

                <div class="icon menu-btn">
                    <input type="checkbox" type="checkbox" id="toggle-menu">
                    <label for="toggle-menu"><i class='bx bx-menu'></i></label>
                </div>

                <div class="centered-logo">
                    <div class="box_img">
                        <a href="./index.php"><img src="./images/nav/logo.png" alt="" class="header_img"></a>
                    </div>
                </div>

                <div class="header-column" id="menu">
                    <ul class="header-become">
                        <li class="header-list__item">
                            <a href="#" class="header-list__link" title="Не доступно">
                                <str_no_activ>Для хлопців</str_no_activ>
                            </a>
                        </li>
                        <li class="header-list__item">
                            <a href="#" class="header-list__link">
                                <str_activ>Для дівчат</str_activ>
                            </a>
                        </li>
                    </ul>


                    <ul class="header-menu">
                        <div class="icon cancel-btn">
                            
                            <button id="close-menu"><i class='bx bx-x'></i></button>
                        </div>
                        <li class="header-menu__item">
                            <a href="./client/new/shirt.php" class="header-menu__link">
                                <red>Знижки</red>
                            </a>
                        </li>
                        <li class="header-menu__item">
                            <a href="./client/new/new_product.php" class="header-menu__link">
                                <green>Новинки</green>
                            </a>
                        </li>
                        <li class="header-menu__item">
                            <a class="header-menu__link" id="header__activ">Одяг</a>
                            <ul class="submenu">
                                <li><a href="./menu/verkhnyaya-odezhda/verkhnyaya-odezhda.php" class="header-row-menu__link">ВЕРХНІЙ ОДЯГ</a></li>
                                <li><a href="./menu/kofty-svitshoty/kofty-svitshoty.php" class="header-row-menu__link">ТОЛСТОВКИ</a></li>
                                <li><a href="./menu/shtany/shtany.php" class="header-row-menu__link">ШТАНИ</a></li>
                            </ul>
                        </li>
                        <li class="header-menu__item">
                            <a class="header-menu__link" id="header__activ">Аксесуари</a>
                            <ul>
                                <li><a href="./menu/ryukzaki/ryukzaki.php" class="header-row-menu__link">Рюкзаки</a></li>
                                <li><a href="./menu/sumki-na-poyas/sumki-na-poyas.php" class="header-row-menu__link">Сумки</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-row__menu">
                        <ul class="nav-list">
                            <li class="nav-list__item"><a href="../nav/about/about.php" class="nav-list__link">Про нас</a>
                            </li>
                            <li class="nav-list__item"><a href="./nav/delivery/delivery.php" class="nav-list__link">Доставка, оплата, повернення</a></li>
                        </ul>

                        <ul class="nav-tel">
                            <form action="" method="post">
                                <li class="nav-tel__item">
                                    <p>Ім'я користувача : <span><i><b><?php echo $fetch_user['name']; ?></b> </i> </span></p>
                                </li>
                            </form>
                            <a href="tel:+380679473511">
                                <i class='bx bxs-phone'></i>
                                <li class="nav-tel__item">067 947-35-11</li>
                            </a>
                            <a href="tel:+380679473511">
                                <i class='bx bxs-phone'></i>
                                <li class="nav-tel__item">067 947-35-11</li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="search">
                    <form id="searchForm" method="GET" action="./client/search/search.php">
                        <div class="header__search" id="searchButton">
                            <div class="box_search">
                                <input type="text" name="query" placeholder="Введите запрос" class="field text_search">
                                <button class="bx bx-search-alt-2"></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="header-carts-end">
                    <ul class="header-carts">
                        <div class="dropdown">
                            <ul class="header-cart__item">
                                <li><img src="./images/nav/login.png" alt="login" class="icon-img"></li>

                                <div class="dropdown-content">
                                    <a href="./login/register.php">
                                        <i class="bx bxs-user-plus"></i>
                                        Реєстрація
                                    </a>
                                    <a href="./login/login.php" class="text-enter" name="logout">
                                        <i class='bx bxs-log-in'></i>
                                        Ввійти
                                    </a>
                                </div>
                            </ul>
                        </div>

                        <div class="my-link">
                            <li class="header-cart__item">
                                <a href="./basket/basket_anonymous.php">
                                    <span class="header__cart-number">
                                        <?php
                                        echo mysqli_num_rows($cart_query);
                                        ?>
                                    </span>
                                    <img src="./images/nav/basket.png" alt="" class="icon-img" id="">
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="search__menu">
                <form id="searchForm" method="GET" action="./client/search/search.php">
                    <div class="header__search" id="searchButton">
                        <div class="box_search">
                            <input type="text" name="query" placeholder="Введите запрос" class="field text_search">
                            <button class="bx bx-search-alt-2"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="section-title">
            <div class="section_img">
                <img src="./images/Section/section.jpeg" alt="" class="desktop-image">
                <img src="./images/Section/section-mobile.jpeg" alt="" class="mobile-image">
                <div class="submit">
                    <input type="button" value="" class="button">
                    <a href="./client/new/shirt.php"><button class="button_section">Перейти</button></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Carts -->
    <sestion class="sestion ">
        <div class="container">
            <div class="cards">
                <div class="card">
                    <a href="./menu/sweatshirt/sweatshirt.html"><img src="./images/Card/Cart-1.webp" alt="" srcset="" class="card_link"></a>
                    <div class="submit-card">
                        <a href="./menu/kofty-svitshoty/kofty-svitshoty.php"><button class="button_cards">
                                Перейти
                            </button></a>
                    </div>
                </div>
                <div class="card">
                    <a href="./menu/pants/pants.html"><img src="./images/Card/Cart-2.webp" alt="" srcset="" class="card_link"></a>
                    <div class="submit-card">
                        <a href="./menu/shtany/shtany.php"><button class="button_cards">
                                Перейти
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </sestion>




    <footer>
        <div class="footer_block ">
            <div class="container">
                <div class="footer-row">
                    <div class="catalog">
                        <span class="text_info">
                            <h3>Каталог</h3>
                        </span>
                        <ul>
                            <li class="catalog_item"><a href="./client/new/shirt.php" class="catalog_link">
                                    <red>Знижки</red>
                                </a></li>
                            <li class="catalog_item"><a href="./client/new/new_product.php" class="catalog_link">
                                    <green>Новинки</green>
                                </a></li>
                            <li class="catalog_item"><a href="./menu/verkhnyaya-odezhda/verkhnyaya-odezhda.php" class="catalog_link">Одяг</a> </li>
                            <li class="catalog_item"><a href="./menu/ryukzaki/ryukzaki.php" class="catalog_link">Аксесуари</a> </li>
                        </ul>
                    </div>

                    <div class="info">
                        <span class="text_info">
                            <h3>Інформація</h3>
                        </span>
                        <ul>
                            <li class="info_item"><a href="./client/nav/about/about.php" class="info_link"> Про нас</a></li>
                            <li class="info_item"><a href="./client/nav/delivery/delivery.php" class="info_link"> Доставка, оплата, повернення </a></li>
                        </ul>
                    </div>

                    <div class="social_networkss">
                        <a class="text_info">Соціальні мережі</a>
                        <div class="img_row">
                            <div class="img-facebook">
                                <a href="https://www.facebook.com/karabetstyle"><i class='bx bxl-facebook-circle'></i></a>
                            </div>
                            <div class="img-instagram">
                                <a href="https://www.instagram.com/karabet_studio/"><i class='bx bxl-instagram'></i></a>
                            </div>
                            <div class="img-telegram">
                                <a href="https://t.me/davidchyorny"><i class='bx bxl-telegram'></i></a>
                            </div>
                            <div class="img-YouType">
                                <a href="https://www.youtube.com/channel/UCJqEK1o9w6sn79EwLzyDrlQ"><i class='bx bxl-youtube'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-copyright -->
                <div class="footer-copyright">
                    <div class="footer-copyright-name"> © 2023 </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="./js/close_menu.js"></script>
    <button id="scroll-to-top-btn"><i class='bx bxs-up-arrow'></i></i></button>
    <script src="./js/scroll_top_bth.js"></script>
    <script src="./js/modalsearch.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
