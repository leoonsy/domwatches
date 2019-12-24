$(() => {
    //анимация блоков
    if (isset(AOS)) {
        AOS.init({
            once: true
        });
    }

    //функционал гамбургерного меню
    $('.navbar__hamburger').on('click', function (e) {
        $(this).toggleClass('is-active');
        $('.navbar__top-menu').stop().slideToggle(800, function () {
            if ($(this).css('display') === "none")
                $(this).removeAttr('style');
            else
                $(this).css('display', 'flex');
        });
    });

    //скролл при нажатии на кнопку "Выбрать часы"
    $(".top-info__buy").on('click', function (e) {
        var fixed_offset = 15;
        $('html,body').stop().animate({
            scrollTop: $(this.hash).offset().top - fixed_offset
        }, 1000);
        e.preventDefault();
    });

    //таймер
    if (isset($.fn.flipper))
        $('#myFlipper').flipper('init');

    //задание количества товаров
    if (isset($.fn.TouchSpin)) {
        $("input[name^='buyCount']").TouchSpin({
            min: 0,
            max: 100,
            step: 1
        });
    }

    //убрать красную рамку ошибок при наведении на input
    $('.buy-form input').on('focus', function () {
        if ($(this).hasClass('is-invalid'))
            $(this).removeClass('is-invalid')
    });

    //подсчет стоимости всех товаров
    $('.buy-goods__count-input').on('change', function () {
        let sumCost = 0;
        $('.buy-goods__item').each(function () {
            let cost = parseInt($(this).find('.buy-goods__price-new').html());
            let count = parseInt($(this).find('.buy-goods__count-input').val());
            sumCost += cost * count;
        });

        $('.buy-goods__cost-number').text(`${sumCost}₽`);
    });

    //изменение контенеров при определенной ширине экрана
    ChangeContainer('#section-discount', 992);
    $(window).resize((e) => {
        ChangeContainer('#section-discount', 992);
    });

    //покупка товаров
    $('form').submit(function (e) {
        var $form = $(this);
        $.ajax({
            method: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done((e) => {
            alert('success');
            alert(e);
        }).fail(function () {
            alert('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });
});

function isset(v) {
    return typeof v !== 'undefined';
}

function ChangeContainer(selector, size) {
    if ($(window).width() < size)
        $(selector + ' .container').removeClass("container").addClass("container-fluid");
    else
        $(selector + ' .container-fluid').removeClass("container-fluid").addClass("container");
}