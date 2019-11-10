<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Domwatches</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.min.css">
    <link rel="stylesheet" href="styles/countdown.min.css">
    <link rel="stylesheet" href="styles/animate.min.css">
    <link rel="stylesheet" href="styles/jquery.fancybox.min.css">
</head>

<body>
    <!--[if lt IE 8]>
	<p>Вы используете <strong>устаревшую</strong> версию браузера. Пожалуйста <a
			href="http://browsehappy.com/">обновите свой браузер</a>.</p>
    <![endif]-->
    <div id="wrapper">
        <div id="content">
            <header id="header">
                <div class="nav-container">
                    <nav class="navbar">
                        <div class="navbar__brand">
                            <a href="#" class="navbar__brand-link">
                                <img class="navbar__brand-logo" src="images/logo.png" />
                                <span class="navbar__brand-text">DOMWATCHES</span>
                            </a>
                        </div>
                        <ul class="navbar__top-menu is-active">
                            <li class="navbar__item">
                                <a class="navbar__link" href="index.php">ГЛАВНАЯ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="#">ЗАКАЗАТЬ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link navbar__active" href="photo">ФОТО</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="#">ОТЗЫВЫ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="#">ВОПРОС-ОТВЕТ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="#">КОНТАКТЫ</a>
                            </li>
                        </ul>
                        <!-- <div class="navbar__hamburger">
                            <span class="navbar__hamburger-text">Меню</span>
                            <i class="navbar__hamburger-img fa fa-times fa-bars"></i>
                        </div> -->
                        <div class="hamburger navbar__hamburger" id="hamburger-1">
                            <span class="navbar__hamburger-text">Меню</span>
                            <div class="navbar__hamburger-icon">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <section id="gallery-section">
                <div class="container-fluid">
                    <div class="gallery">
                        <div class="gallery__header">
                            <h4>ФОТОАЛЬБОМ</h4>
                        </div>
                        <div class="row gallery__main">
                            <div class="col-3 p-0">
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/1.jpg">
                                        <img src="images/gallery/1.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/2.jpg">
                                        <img src="images/gallery/2.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/3.jpg">
                                        <img src="images/gallery/3.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/4.jpg">
                                        <img src="images/gallery/4.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/5.jpg">
                                        <img src="images/gallery/5.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/6.jpg">
                                        <img src="images/gallery/6.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/7.jpg">
                                        <img src="images/gallery/7.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/8.jpg">
                                        <img src="images/gallery/8.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/9.jpg">
                                        <img src="images/gallery/9.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/10.jpg">
                                        <img src="images/gallery/10.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/11.jpg">
                                        <img src="images/gallery/11.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a class="gallery__item-wrap" data-fancybox="gallery" href="images/gallery/12.jpg">
                                        <img src="images/gallery/12.jpg">
                                        <i class="gallery__item-len fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 d-lg-block d-sm-none">
                        <h2 class="footer__logo">
                            <a class="footer__logo-href" href="#">DOMWATCHES</a>
                        </h2>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <h5 class="footer__menu-name">Меню</h5>
                        <ul class="footer__list">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Заказать</a></li>
                            <li><a href="#">Фото</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <h5 class="footer__menu-name">Поддержка</h5>
                        <ul class="footer__list">
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">Вопросы-ответы</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <h5 class="footer__menu-name">Связь</h5>
                        <ul class="footer__list">
                            <li><a href="#">8 (919) 859-21-35</a></li>
                            <p>г. Оренбург</p>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="footer__icons">
                            <a href="#" class="footer__icons-vk"><i class="fab fa-vk"></i></a>
                            <a href="#" class="footer__icons-youtube"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="footer__icons-mail"><i class="far fa-envelope"></i></a>
                        </div>
                        <a class="footer__button" href="#">Задать вопрос</a>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <a href="#">Политика конфиденциальности</a>
            </div>
        </footer>
    </div>

    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/parallax.min.js"></script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/fontawesome.min.js"></script>
    <script src="scripts/jquery.flipper-responsive.min.js"></script>
    <script src="scripts/jquery.fancybox.min.js"></script>
    <script src="scripts/wow.min.js"></script>

    <script>
        //анимация блоков
        $(function() {
            new WOW().init();
        });

        //навигация
        $('.navbar__hamburger').on('click', function(e) {
            $(this).toggleClass('is-active');
            $('.navbar__top-menu').stop().slideToggle(800, function() {
                if ($(this).css('display') === "none")
                    $(this).removeAttr('style');
                else
                    $(this).css('display', 'flex');
            });
        });
    </script>
</body>

</html>