$(() => {
    //анимация блоков
    AOS.init({
        once: true
    });

    //функционал гамбургерного меню
    $('.navbar__hamburger').on('click', function(e) {
        $(this).toggleClass('is-active');
        $('.navbar__top-menu').stop().slideToggle(800, function() {
            if ($(this).css('display') === "none")
                $(this).removeAttr('style');
            else
                $(this).css('display', 'flex');
        });
    });

    //скролл при нажатии на кнопку "Выбрать часы"
    $(".top-info__buy").on('click', function(e) {
        var fixed_offset = 15;
        $('html,body').stop().animate({
            scrollTop: $(this.hash).offset().top - fixed_offset
        }, 1000);
        e.preventDefault();
    });

    //таймер
    $('#myFlipper').flipper('init');

    //задание количества товаров
    $("input[name^='buyCount']").TouchSpin({
        min: 0,
        max: 100,
        step: 1
    });

    //убрать красную рамку ошибок при наведении на input
    $('.buy-form input').on('focus', function() {
        if ($(this).hasClass('is-invalid'))
            $(this).removeClass('is-invalid')
    });

    //подсчет стоимости всех товаров
    $('.buy-goods__count-input').on('change', function() {
        let sumCost = 0;
        $('.buy-goods__item').each(function() {
            let cost = parseInt($(this).find('.buy-goods__price-new').html());
            let count = parseInt($(this).find('.buy-goods__count-input').val());
            sumCost += cost * count;
        });

        $('.buy-goods__cost-number').text(`${sumCost}₽`);
    });
});