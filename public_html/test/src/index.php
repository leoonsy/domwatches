<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Domwatches</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="/test/dist/scripts/jquery-3.4.1.js"></script>
    <script src="/test/dist/scripts/popper.js"></script>
    <script src="/test/dist/scripts/bootstrap.js"></script>
    <script src="/test/dist/scripts/fontawesome.js"></script>
    <script src="/test/dist/scripts/jquery.flipper-responsive.js"></script>
    <link rel="stylesheet" href="/test/dist/styles/bootstrap.css">
    <link rel="stylesheet" href="/test/dist/styles/main.css">
    <link rel="stylesheet" href="/test/dist/styles/countdown.css">

    <script>
        $(function() {
            $('#myFlipper').flipper('init');
        });
    </script>
</head>

<body>
    <!--[if lt IE 8]>
	<p>Вы используете <strong>устаревшую</strong> версию браузера. Пожалуйста <a
			href="http://browsehappy.com/">обновите свой браузер</a>.</p>
    <![endif]-->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar__brand">
                    <a href="#" class="navbar__brand-link">
                        <img class="navbar__brand-logo" src="/test/dist/images/logo.png" />
                        <span>DOMWATCHES</span>
                    </a>
                </div>
                <ul class="navbar__top-menu">
                    <li class="navbar__item">
                        <a class="navbar__link navbar__active" href="#">ГЛАВНАЯ</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">КАТАЛОГ</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">ГАРАНТИЯ</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">О НАС</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">КОНТАКТЫ</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">КОРЗИНА</a>
                    </li>
                </ul>
                <i class="navbar__hamburger fa fa-bars"></i>
                <a class="navbar__cart fa fa-shopping-cart" href="#"></a>
            </nav>
        </div>
    </header>
    <section id="section-top">
        <div class="container h-100 d-flex">
            <div class="top-info">
                <h1 class="top-info__title">Современные мужские часы DOM</h1>
                <h2 class="top-info__desc">Наручные металлические и кожаные часы с хронографом</h2>
                <hr class="top-info__hr" />
                <p class="top-info__desc-2">
                    Стильные, устойчивые к царапинам водонепроницаемые часы DOM прослужат вам многие годы и подчеркнут вашу индивидуальность!
                </p>
                <a class="top-info__buy" href="#" role="button">Выбрать часы</a>
            </div>
        </div>
    </section>
    <section id="section-advant">
        <div class="container">
            <div class="row advant">
                <div class="col-lg-12 advant__header">
                    <h3>ПРЕИМУЩЕСТВА ЧАСОВ</h3>
                    <img src="/test/dist/images/hr.png" class="advant__hr" />
                </div>
                <div class="col-lg-4 advant__item">
                    <div class="advant__img advant__glass"></div>
                    <h4>Устойчивость к царапинам</h4>
                    <p>Закаленное минеральное стекло имеет высокую прочность и сопротивление к царапинам. Данное покрытие сложно поцарапать даже намеренно.</p>
                </div>
                <div class="col-lg-4 advant__item">
                    <div class="advant__img advant__protection"></div>
                    <h4>Защита от повреждений</h4>
                    <p>Нержавеющая сталь металлических часов защищает их от окисления и внешних повреждений. Часы также защищены от влаги.</p>
                </div>
                <div class="col-lg-4 advant__item">
                    <div class="advant__img advant__design"></div>
                    <h4>Безупречный дизайн</h4>
                    <p>Внешний вид часов отлично дополнит образ владельца и придаст статусности.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="section-discount">
        <div class="container">
            <div class="row discount">
                <div class="col-8 discount__left">
                    <h2 class="discount__attention">Внимание! Действует скидка</h2>
                    <h3 class="discount__amount">на часы <b>M-635D-7M</b> в размере <b>40%</b></h3>
                    <div class="price">
                        <div class="price__text">
                            <p class="price__text-old">Старая цена:</p>
                            <p class="price__text-new">Новая цена:</p>
                        </div>
                        <div class="price__number">
                            <div class="price__number-old">1850р.</div>
                            <div class="price__number-new">1110р.</div>
                        </div>
                    </div>
                    <p class="discount__end">До конца акции осталось:</p>
                    <div class="flipper w-75  discount_timer" data-datetime="2019-12-23 21:45:00" data-template="ddd|HH|ii|ss" data-labels="Дней|Часов|Минут|Секунд" data-reverse="true" id="myFlipper"></div>
                    <a class="discount__button" href="#">Заказать со скидкой</a>
                </div>
                <div class="col-4 discount__img">
                    <img src="/test/dist/images/discount.png" />
                </div>
            </div>
        </div>
    </section>
    <section id="section-characters">
        <div class="container">
            <div class="row characters">
                <div class="col-lg-12 characters__header">
                    <h3>ХАРАКТЕРИСТИКИ ЧАСОВ</h3>
                    <img src="/test/dist/images/hr.png" class="characters__hr" />
                </div>
                <div class="col-lg-6 characters__carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/1.jpg" alt="M-635BK-1M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635BK-1M</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/2.jpg" alt="M-635BK-7M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635BK-7M</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/3.jpg" alt="M-635D-1M9">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635D-1M9</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/4.jpg" alt="M-635D-7M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635D-7M</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/5.jpg" alt="M-635BL-1M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635BL-1M</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/6.jpg" alt="M-635BL-7M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635BL-7M</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/7.jpg" alt="M-635L-1M9">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635L-1M9</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/test/dist/images/carousel-characters/8.jpg" alt="M-635L-7M">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>M-635L-7M</h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 characters__info">
                    <ul class="characters__list">
                        <li class="characters__item"><b>Модель:</b><span>M-635</span></li>
                        <li class="characters__item"><b>Производитель:</b><span>Китай</span></li>
                        <li class="characters__item"><b>Механизм:</b><span>Кварцевый</span></li>
                        <li class="characters__item"><b>Корпус:</b><span>Нержавеющая сталь</span></li>
                        <li class="characters__item"><b>Ремешок:</b><span>Нержавеющая сталь / кожа</span></li>
                        <li class="characters__item"><b>Стекло:</b><span>Закаленное минеральное</span></li>
                        <li class="characters__item"><b>Водонепроницаемость:</b><span>30м</span></li>
                        <li class="characters__item"><b>Диаметр:</b><span>42мм</span></li>
                        <li class="characters__item"><b>Год:</b><span>2019</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="section-why-we">
        <div class="container why-we">
            <div class="why-we__header">
                <h3>ПОЧЕМУ МЫ?</h3>
                <img src="/test/dist/images/hr.png" class="characters__hr" />
            </div>
            <div class="why-we__content">
                <div class="row why-we__main ">
                    <div class="col-lg-6 mb-3">
                        <div class="why-we__item">
                            <img src="/test/dist/images/icons/air.png">
                            <h3>БЫСТРАЯ ДОСТАВКА</h3>
                            <p>Срок доставки почтой России - от 1 до 10 дней (в зависимости от Вашего региона). Отправление товара осуществляется первым классом в виде посылки.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="why-we__item">
                            <img src="/test/dist/images/icons/r.png">
                            <h3>ОПЛАТА ПРИ ПОЛУЧЕНИИ</h3>
                            <p>Оплата товара только при получении на руки. Никаких предоплат. Доставка за наш счет.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="why-we__item">
                            <img src="/test/dist/images/icons/support.png">
                            <h3>ТЕХНИЧЕСКАЯ ПОДДЕРЖКА</h3>
                            <p>Служба поддержки ответит на любой Ваш вопрос. Вы можете написать на письмо на электронную почту либо заказать звонок.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="why-we__item">
                            <img src="/test/dist/images/icons/lock.png">
                            <h3>ГАРАНТИИ</h3>
                            <p>Продукт прошел 100% проверку. Мы также соблюдаем закон «О защите прав потребителя». Свяжитесь с нами, если по какой-либо причине решили вернуть товар. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-how-works">
        <div class="container how-works">
            <div class="how-works__header">
                <h3>Как получить часы</h3>
                <img src="/test/dist/images/hr.png" class="characters__hr" />
            </div>
            <div class="how-works__sequence">
                <div class="how-works__basket">Вы выбираете понравившиеся часы и добавляете их в корзину</div>
                <div class="how-works__form">Вы оставляете заявку через форму заявки на сайте</div>
                <div class="how-works__call">Мы перезваниваем вам для подтверждения заказа</div>
                <div class="how-works__send">Отправляем ваш заказ в пункт назначения</div>
                <div class="how-works__check">Вы проверяете и оплачиваете товар на почте</div>
            </div>
        </div>
    </section>
    <section id="section-review">
        <div class="container">
            <div class="review">
                <div class="review__header">
                    <h3>ОТЗЫВЫ</h3>
                    <img src="/test/dist/images/rev.png" class="characters__hr" />
                </div>
                <div class="review__carousel">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mx-5 w-auto">
                            <div class="carousel-item active">
                                <div class="review__item">
                                    <img src="/test/dist/images/reviews/1.jpg" class="review__avatar" />
                                    <div class="review__text">
                                        <h3>Михаил Быков</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review__item">
                                    <img src="/test/dist/images/reviews/2.jpg" class="review__avatar" />
                                    <div class="review__text">
                                        <h3>Алексей Сазонов</h3>
                                        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="review__item">
                                    <img src="/test/dist/images/reviews/3.jpg" class="review__avatar" />
                                    <div class="review__text">
                                        <h3>Шведчиков Александр</h3>
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>