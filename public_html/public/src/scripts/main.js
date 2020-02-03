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

    //автоматическое изменение таймера
    let $timer = $('.discount__timer');
    if ($timer.length != 0) {
        const discountDuration = 4; //длительность акции в днях
        const currentDate = moment();
        let currentDay = currentDate.format('DD');
        const addDay = discountDuration - currentDay % discountDuration;
        let resultDay = currentDate.add(addDay, 'days').format('YYYY-MM-DD 00:00:00');
        $timer.attr('data-datetime', resultDay);
    }

    //инициализация таймера
    if (isset($.fn.flipper))
        $('#myFlipper').flipper('init');

    //задание количества товаров
    if (isset($.fn.TouchSpin)) {
        $("input[name^='inputWatches']").TouchSpin({
            min: 0,
            max: 100,
            step: 1
        });
    }

    //убрать красную рамку ошибок при наведении на input
    $('.buy-form input, .contacts__form input').on('focus', function () {
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
        $('#inputPrice').val(sumCost);
    });

    //изменения при определенной ширине экрана
    changeContainer('#section-discount', 992);
    changeAttachment('#section-discount', 1024);
    $(window).resize((e) => {
        changeContainer('#section-discount', 992);
        changeAttachment('#section-discount', 1024);
    });

    //покупка товаров
    $('.buy-form').submit(function (e) {
        let $form = $(this);
        let errors = bootstrapGetErrors(bootstrapBuyParams); //клиентская проверка на ошибки
        if (errors.length != 0) {
            $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
            $('#bootstrapModal .modal-body').html(`Неверно заполнены поля: ${errors.join(', ')}.`);
            $('#bootstrapModal').modal();
        }
        else {
            $.ajax({
                method: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize()
            }).done((e) => {
                if (e == 'success') {
                    $('#bootstrapModal .modal-title').html('<span class="text-success">Спасибо за заказ!</span>');
                    $('#bootstrapModal .modal-body').html('Ваш заказ принят! В ближайшее время с Вами свяжется менеджер для подтверждения заказа!');
                } else {
                    $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
                    $('#bootstrapModal .modal-body').html(e);
                }
                $('#bootstrapModal').modal();
            }).fail(function () {
                $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
                $('#bootstrapModal .modal-body').html('Невозможно сделать заказ! Попробуйте снова!');
                $('#bootstrapModal').modal();
            });
        }
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });

    //обратная связь
    $('.contacts__form').submit(function (e) {
        let $form = $(this);
        let errors = bootstrapGetErrors(bootstrapFeedbackParams); //клиентская проверка на ошибки
        if (errors.length != 0) {
            $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
            $('#bootstrapModal .modal-body').html(`Неверно заполнены поля: ${errors.join(', ')}.`);
            $('#bootstrapModal').modal();
        }
        else {
            $.ajax({
                method: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize()
            }).done((e) => {
                if (e == 'success') {
                    $('#bootstrapModal .modal-title').html('<span class="text-success">Сообщение отправлено</span>');
                    $('#bootstrapModal .modal-body').html('Ваше сообщение отправлено службе технической поддержки. Ожидайте ответа на указанный email-адрес.');
                } else {
                    $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
                    $('#bootstrapModal .modal-body').html(e);
                }
                $('#bootstrapModal').modal();
            }).fail(function () {
                $('#bootstrapModal .modal-title').html('<span class="text-danger">Ошибка!</span>');
                $('#bootstrapModal .modal-body').html('Невозможно отправить сообщение! Попробуйте снова!');
                $('#bootstrapModal').modal();
            });
        }
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });
});

function isset(v) {
    return typeof v !== 'undefined';
}

//изменить контейней на противоположный (bootstrap)
function changeContainer(selector, size) {
    if ($(window).width() < size)
        $(selector + ' .container').removeClass("container").addClass("container-fluid");
    else
        $(selector + ' .container-fluid').removeClass("container-fluid").addClass("container");
}

function changeAttachment(selector, size) {
    if ($(window).width() < size)
        $(selector).css('backgroundAttachment', 'scroll');
    else
        $(selector).css('backgroundAttachment', 'fixed');
}

//возвращает массив ошибок на русском языке для формы
function bootstrapGetErrors(params) {
    let errors = [];
    for (let key in params)
        if (params[key].error)
            errors.push(params[key].rus);

    return errors;
}