<!DOCTYPE html>
<html lang="ru">
<?= $header ?>
<!--[if lte IE 9]><style>#wrapper,.parallax-mirror{display:none;}</style><p class="text-center text-danger h1">Вы используете <strong>устаревшую</strong> версию браузера. Пожалуйста <a href="http://browsehappy.com/">обновите свой браузер</a>.</p><![endif]-->

<body>
    <div id="wrapper">
        <div id="content">
            <header id="header">
                <div class="nav-container">
                    <nav class="navbar">
                        <div class="navbar__brand">
                            <a href="index.php" class="navbar__brand-link">
                                <img class="navbar__brand-logo" src="/public/dist/images/logo.png" alt="Логотип" />
                                <span class="navbar__brand-text">DOMWATCHES</span>
                            </a>
                        </div>
                        <ul class="navbar__top-menu is-active">
                            <?php foreach ($menu as $item) : ?>
                                <li class="navbar__item">
                                    <a class="navbar__link <?php if ($item['active']) : ?>navbar__active<?php endif; ?>" href="<?= $item['URL'] ?>">
                                        <?= $item['name'] ?>
                                    </a>
                                </li>
                            <? endforeach; ?>
                        </ul>
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
            <?= $content ?>
        </div>
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 d-lg-block d-sm-none">
                        <h2 class="footer__logo">
                            <a class="footer__logo-href" href="/">DOMWATCHES</a>
                        </h2>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <h5 class="footer__menu-name">Меню</h5>
                        <ul class="footer__list">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/buy">Заказать</a></li>
                            <li><a href="/photo">Фото</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <h5 class="footer__menu-name">Поддержка</h5>
                        <ul class="footer__list">
                            <li><a href="/reviews">Отзывы</a></li>
                            <li><a href="/faq">Вопросы-ответы</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-3">
                        <h5 class="footer__menu-name">Связь</h5>
                        <ul class="footer__list">
                            <li><a href="tel:+79871989378">8 (987) 198-93-78</a></li>
                            <p>г. Оренбург</p>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="footer__icons">
                            <a href="https://vk.com/domwatchesru" target="_blank" class="footer__icons-vk"><i class="icon-vkontakte"></i></a>
                            <a href="mailto:support@domwatches.ru" class="footer__icons-mail"><i class="icon-mail"></i></a>
                        </div>
                        <a class="footer__button" href="/contacts">Задать вопрос</a>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <a href="/policy">Политика конфиденциальности</a>
            </div>
        </footer>
    </div>

    <?= $scripts ?>
</body>

</html>