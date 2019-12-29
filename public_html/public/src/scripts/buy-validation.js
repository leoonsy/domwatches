(function () {
    let params = {
        name: {
            error: true,
            rus: 'имя'
        },
        lastname: {
            error: true,
            rus: 'фамилия'
        },
        patronymic: {
            error: true,
            rus: 'отчество'
        },
        email: {
            error: true,
            rus: 'email'
        },
        region: {
            error: true,
            rus: 'область (край), район'
        },
        city: {
            error: true,
            rus: 'город/село'
        },
        address: {
            error: true,
            rus: 'адрес (улица, дом, квартира...)'
        },
        index: {
            error: true,
            rus: 'почтовый индекс'
        },
        mobile: {
            error: true,
            rus: 'мобильный телефон'
        }
    };

    bootstrapValidate(
        '#inputName',
        'regex:/^\\s*[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректное имя',
        (isValid) => {
            if (isValid) {
                $('#inputName').addClass('buy-form__valid');
                params['name']['error'] = false;
            }
            else {
                $('#inputName').removeClass('buy-form__valid');
                params['name']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputLastname',
        'regex:/^\\s*[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректную фамилию',
        (isValid) => {
            if (isValid) {
                $('#inputLastname').addClass('buy-form__valid');
                params['lastname']['error'] = false;
            }
            else {
                $('#inputLastname').removeClass('buy-form__valid');
                params['lastname']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputPatronymic',
        'regex:/^\\s*[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректное отчество',
        (isValid) => {
            if (isValid) {
                $('#inputPatronymic').addClass('buy-form__valid');
                params['patronymic']['error'] = false;
            }
            else {
                $('#inputPatronymic').removeClass('buy-form__valid');
                params['patronymic']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputEmail',
        'regex:/^\\s*([a-z0-9_-]+\\.)*[a-z0-9_-]+@[a-z0-9_-]+(\\.[a-z0-9_-]+)*\\.[a-z]{2,6}\\s*$/i:Введите корректный e-mail адрес',
        (isValid) => {
            if (isValid) {
                $('#inputEmail').addClass('buy-form__valid');
                params['email']['error'] = false;
            }
            else {
                $('#inputEmail').removeClass('buy-form__valid');
                params['email']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputRegion',
        'regex:/^\\s*[a-zа-я0-9ё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректную область (край) или район',
        (isValid) => {
            if (isValid) {
                $('#inputRegion').addClass('buy-form__valid');
                params['region']['error'] = false;
            }
            else {
                $('#inputRegion').removeClass('buy-form__valid');
                params['region']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputIndex',
        'regex:/^\\s*[0-9]{6}\\s*$/i:Введите корректный почтовый индекс (6 цифр)',
        (isValid) => {
            if (isValid) {
                $('#inputIndex').addClass('buy-form__valid');
                params['index']['error'] = false;
            }
            else {
                $('#inputIndex').removeClass('buy-form__valid');
                params['index']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputMobile',
        'regex:/^\\s*\\+?([-\\s:\\(\\)]?[0-9]){7,}\\s*$/i:Введите корректный мобильный телефон',
        (isValid) => {
            if (isValid) {
                $('#inputMobile').addClass('buy-form__valid');
                params['mobile']['error'] = false;
            }
            else {
                $('#inputMobile').removeClass('buy-form__valid');
                params['mobile']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputCity',
        'regex:/^\\s*[a-zа-я0-9ё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректный город',
        (isValid) => {
            if (isValid) {
                $('#inputCity').addClass('buy-form__valid');
                params['city']['error'] = false;
            }
            else {
                $('#inputCity').removeClass('buy-form__valid');
                params['city']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputAddress',
        'regex:/^\\s*[a-zа-я0-9ё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректный адрес',
        (isValid) => {
            if (isValid) {
                $('#inputAddress').addClass('buy-form__valid');
                params['address']['error'] = false;
            }
            else {
                $('#inputAddress').removeClass('buy-form__valid');
                params['address']['error'] = true;
            }
        }
    );

    window.bootstrapBuyParams = params;
})();