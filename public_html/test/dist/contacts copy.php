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
    <link rel="stylesheet" href="styles/aos.min.css">
    <style>

    </style>
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
                            <a href="index.php" class="navbar__brand-link">
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
                                <a class="navbar__link" href="photo.php">ФОТО</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="reviews.php">ОТЗЫВЫ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="faq.php">ВОПРОС-ОТВЕТ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link navbar__active" href="contacts.php">КОНТАКТЫ</a>
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
            <section id="contacts-section">
                <div class="container contacts">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contacts__info" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000">
                                <h4 class="contacts__title">ИНФОРМАЦИЯ</h4>
                                <div class="contacts__communication-info">
                                    <div class="contacts__communication-single communication-single">
                                        <div class="communication-single__icon">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <div class="communication-single__text">
                                            <h4 class="communication-single__header">Телефон:</h4>
                                            <p><a href="tel:+79198592135">8 (919) 859-21-35</a></p>
                                        </div>
                                    </div>
                                    <div class="contacts__communication-single communication-single">
                                        <div class="communication-single__icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="communication-single__text">
                                            <h4 class="communication-single__header">Email:</h4>
                                            <p><a href="mailto:yashanovsky.sergey@ya.ru">yashanovsky.sergey@ya.ru</a></p>
                                        </div>
                                    </div>
                                    <div class="contacts__communication-single communication-single">
                                        <div class="communication-single__icon">
                                            <i class="fab fa-vk"></i>
                                        </div>
                                        <div class="communication-single__text">
                                            <h4 class="communication-single__header">VK:</h4>
                                            <p><a href="https://vk.com/domwatchesru">http://vk.com/domwatchesru</i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contacts__message" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000">
                                <h4 class="contacts__title">ОБРАТНАЯ СВЯЗЬ</h4>
                                <form class="contacts__form" action="contacts.php" method="post">
                                    <div class="form-row">
                                        <div class="col-lg-6 form-group">
                                            <div class="contacts__form-style">
                                                <input name="name" class="form-control" placeholder="Имя" type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <div class="contacts__form-style input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">@</div>
                                                </div>
                                                <input name="email" class="form-control" placeholder="Email" type="email" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <div class="contacts__form-style">
                                                <input name="subject" class="form-control" placeholder="Тема" type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <div class="contacts__form-style">
                                                <textarea name="message" class="form-control" placeholder="Сообщение" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <div class="contacts__form-style">
                                                <button class="contacts__form-submit btn btn-primary" type="submit">Отправить</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                            <li><a href="tel:+79198592135">8 (919) 859-21-35</a></li>
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
    <script src="scripts/aos.min.js"></script>
    <script src="//cdn.perezvoni.com/widget/js/przv.js?przv_code=30258-b140b75-0efcbbf9204e631b140-4e631b140b75-cd10efcbb" ></script>

    <script>
        $(function() {
            AOS.init({
                once: true
            });
            $('.navbar__hamburger').on('click', function(e) {
                $(this).toggleClass('is-active');
                $('.navbar__top-menu').stop().slideToggle(800, function() {
                    if ($(this).css('display') === "none")
                        $(this).removeAttr('style');
                    else
                        $(this).css('display', 'flex');
                });
            });

            $('.panel-group').on('hidden.bs.collapse', toggleClose);
            $('.panel-group').on('shown.bs.collapse', toggleOpen);

            function toggleOpen(e) {
                $(e.target)
                    .prev('.card-header')
                    .find(".expand-icon")
                    .text("remove_circle");
            }

            function toggleClose(e) {
                $(e.target)
                    .prev('.card-header')
                    .find(".expand-icon")
                    .text("add_circle");
            }
        });
    </script>
</body>

</html>