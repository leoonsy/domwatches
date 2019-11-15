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
    <script>
        alert(new Regex('/^[a-zа-я]{1}[a-zа-я\(\)\.,\s_-]+$/i').test('fff'));
    </script>
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
                                <a class="navbar__link navbar__active" href="buy-goods.php">ЗАКАЗАТЬ</a>
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
                                <a class="navbar__link" href="contacts.php">КОНТАКТЫ</a>
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
            <section id="buy-section">
                <div class="container buy-goods">
                    <div class="buy-goods__step1">
                        <h4 class="buy-goods__step1-text"><span>Шаг 1</span>. Выберите часы для покупки и их количество</h4>
                    </div>
                    <div class="row buy-goods__content text-lg-left text-center">
                        <div class="col-lg-3 buy-goods__item">
                            <div class="buy-goods__item-content">
                                <div class="buy-goods__img">
                                    <img src="images/watches/0.png" />
                                </div>
                                <div class="buy-goods__discount buy-goods__discount--few">
                                    <span>СКИДКА 20%</span>
                                </div>
                                <h3 class="buy-goods__title">M-635D-1M9</h3>
                                <div class="buy-goods__price">
                                    <div class="buy-goods__price-old">
                                        2499₽
                                    </div>
                                    <div class="buy-goods__price-new">
                                        1999₽
                                    </div>
                                </div>
                                <hr class="buy-goods__item-separator" />
                                <div class="buy-goods__count">
                                    <span class="buy-goods__count-text">Количество:</span>
                                    <input class="buy-goods__count-input" type="text" value="0" name="buyCount">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 buy-goods__item">
                            <div class="buy-goods__item-content">
                                <div class="buy-goods__img">
                                    <img src="images/watches/1.png" />
                                </div>
                                <div class="buy-goods__discount buy-goods__discount--few">
                                    <span>СКИДКА 20%</span>
                                </div>
                                <h3 class="buy-goods__title">M-635BK-1M</h3>
                                <div class="buy-goods__price">
                                    <div class="buy-goods__price-old">
                                        2499₽
                                    </div>
                                    <div class="buy-goods__price-new">
                                        1999₽
                                    </div>
                                </div>
                                <hr class="buy-goods__item-separator" />
                                <div class="buy-goods__count">
                                    <span class="buy-goods__count-text">Количество:</span>
                                    <input class="buy-goods__count-input" type="text" value="0" name="buyCount">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 buy-goods__item">
                            <div class="buy-goods__item-content">
                                <div class="buy-goods__img">
                                    <img src="images/watches/2.png" />
                                </div>
                                <div class="buy-goods__discount">
                                    <span>СКИДКА 40%</span>
                                </div>
                                <h3 class="buy-goods__title">M-635L-1M9</h3>
                                <div class="buy-goods__price">
                                    <div class="buy-goods__price-old">
                                        2499₽
                                    </div>
                                    <div class="buy-goods__price-new">
                                        1499₽
                                    </div>
                                </div>
                                <hr class="buy-goods__item-separator" />
                                <div class="buy-goods__count">
                                    <span class="buy-goods__count-text">Количество:</span>
                                    <input class="buy-goods__count-input" type="text" value="0" name="buyCount">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 buy-goods__item">
                            <div class="buy-goods__item-content">
                                <div class="buy-goods__img">
                                    <img src="images/watches/3.png" />
                                </div>
                                <div class="buy-goods__discount buy-goods__discount--few">
                                    <span>СКИДКА 30%</span>
                                </div>
                                <h3 class="buy-goods__title">M-635L-7M</h3>
                                <div class="buy-goods__price">
                                    <div class="buy-goods__price-old">
                                        2499₽
                                    </div>
                                    <div class="buy-goods__price-new">
                                        1749₽
                                    </div>
                                </div>
                                <hr class="buy-goods__item-separator" />
                                <div class="buy-goods__count">
                                    <span class="buy-goods__count-text">Количество:</span>
                                    <input class="buy-goods__count-input" type="text" value="0" name="buyCount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buy-goods__step2">
                        <h4 class="buy-goods__step2-text"><span>Шаг 2</span>. Заполните данные для отправки часов Почтой России</h4>
                    </div>
                    <form class="buy-goods__form buy-form">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label">Имя: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputName" placeholder="Имя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastname" class="col-sm-4 col-form-label">Фамилия: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputLastname" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPatronymic" class="col-sm-4 col-form-label">Отчество: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPatronymic" placeholder="Отчество">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-4 col-form-label">Email: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCity" class="col-sm-4 col-form-label">Страна: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <select size="1" class="form-control" id="inputCity">
                                    <option selected="selected">Только Россия</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputRegion" class="col-sm-4 col-form-label">Область (край), район: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputRegion" placeholder="Область (край), район">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputIndex" class="col-sm-4 col-form-label">Почтовый индекс: <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputIndex" placeholder="Почтовый индекс">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputMobile" class="col-sm-4 col-form-label">Мобильный телефон (для подтверждения заказа): <span class="buy-form__star">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputMobile" placeholder="Мобильный телефон">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputComment" class="col-sm-4 col-form-label">От себя: </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="4" cols="30" id="inputComment" name="inputComment" placeholder="Пожелания, вопросы, предложения"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="inputCode" class="col-form-label">Код безопасности: <span class="buy-form__star">*</span></label>
                                <a href="#" class="nolink" style="margin-left: 0;">
                                    <img class="captcha" src="captcha.php" alt="Код безопасности">
                                </a>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputCode" placeholder="Код безопасности">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-12 text-center">
                                <button class="buy-form__submit btn btn-primary" type="submit">Отправить заказ</button>
                            </div>
                        </div>
                    </form>
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
    <script src="scripts/jquery.bootstrap-touchspin.min.js"></script>
    <script src="scripts/bootstrap-validate.min.js"></script>
    <script src="scripts/form-validation.min.js"></script>

    <script>
        $(() => {
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
            $("input[name='buyCount']").TouchSpin({
                min: 0,
                max: 100,
                step: 1
            });

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