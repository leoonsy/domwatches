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
                                <a class="navbar__link" href="photo.php">ФОТО</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link" href="#">ОТЗЫВЫ</a>
                            </li>
                            <li class="navbar__item">
                                <a class="navbar__link navbar__active" href="faq.php">ВОПРОС-ОТВЕТ</a>
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
            <section id="faq-section">

                <div class="container faq">
                    <div class="faq__feedback alert alert-info alert-dismissible" role="alert" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        Данный раздел содержит ответы на часто задаваемые вопросы. Если Вы не нашли ответа на свой вопрос, пожалуйста, <a class="alert-link" href="feedback.php">свяжитесь с нами</a>.
                    </div>


                    <div class="row" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000">
                        <div class="col-12 mx-auto">
                            <div class="accordion" id="faq__accordion">
                                <div class="card">
                                    <div class="card-header p-2" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Как приобрести часы DOM?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> После выбора понравившихся часов необходимо оставить заявку через форму заявки на сайте. Далее наш менеджер позвонит Вам для подтверждения заказа. После подтверждения заказа часы будут отправлены по почте в ближайшее к Вам почтовое отделение. Оплата товара во время получения посылки на руки.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Сколько по времени занимает доставка часов?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Время доставки зависит от вашего региона, обычно от 1 до 10 дней.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Можно ли вернуть часы?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Возврат часов возможен в течение 14 дней после покупки либо в течение года, если часы не соответствует описанию.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Нужно ли платить отдельно за доставку часов?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Нет, доставка часов осуществляется за наш счет.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Что такое хронограф?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Хронограф позволяет точно измерять определенные промежутки времени (как секундомер). Его работа не мешает работе основного циферблата. Управляется хронограф с помощью боковых кнопок.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Можно ли нырять в воду с данными часами?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Нежелательно. Часы DOM отлично защищены именно от влаги. Поэтому их можно спокойно использовать в повседневной жизни - при умывании или под небольшим дождем.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingSeven">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Будут ли новые часы DOM и скидки на другие модели часов?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Обязательно! Добавляйте наш сайт в закладки, чтобы самыми первыми узнавать о поставке самых новых часов DOM и больших скидках.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-2" id="headingEight">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Как оставить отзыв на сайт?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faq__accordion">
                                        <div class="card-body">
                                            <b>Ответ:</b> Вы можете оставить отзыв, написав его в нашу группу Вконтакте или через форму обратной связи. Грамотные отзывы могут попасть на главную страницу сайта или в раздел "Отзывы".
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/row-->
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
    <script src="scripts/aos.min.js"></script>

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