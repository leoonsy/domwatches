<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?= $title; ?>Frontend test</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="/test/dist/scripts/jquery-3.4.1.js"></script>
    <script src="/test/dist/scripts/popper.js"></script>
    <script src="/test/dist/scripts/bootstrap.js"></script>
    <script src="/test/dist/scripts/fontawesome.js"></script>
    <link rel="stylesheet" href="/test/dist/styles/bootstrap.css">
    <link rel="stylesheet" href="/test/dist/styles/main.css">

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
                        <a class="navbar__link navbar__active" href="#">Главная</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">Заказать</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">Видео</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">Фото</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">Доставка</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#">Контакты</a>
                    </li>
                </ul>
                <i class="navbar__hamburger fa fa-bars"></i>
            </nav>
        </div>
    </header>
    <section id="section-top">
        <div class="container h-100 d-flex">
            <div class="top-info">
                <h1 class="top-info__title">Современные мужские часы DOM</h1>
                <h5 class="top-info__desc">Водонепроницаемые наручные часы с хронографом</h5>
                <hr class="top-info__hr" />
                <p class="top-info__desc-2">Кварцевые часы с натуральным кожаным ремешком и нержавеющей сталью</p>
                <a class="top-info__buy" href="#" role="button">Заказать часы</a>
            </div>
        </div>
    </section>
</body>

</html>