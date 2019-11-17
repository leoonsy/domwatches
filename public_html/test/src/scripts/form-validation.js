bootstrapValidate(
    '#inputName',
    'regex:/^\\s*[a-zа-яё]{1}[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректное имя',
    (isValid) => {
        if (isValid)
            $('#inputName').addClass('buy-form__valid');
        else
            $('#inputName').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputLastname',
    'regex:/^\\s*[a-zа-яё]{1}[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректную фамилию',
    (isValid) => {
        if (isValid)
            $('#inputLastname').addClass('buy-form__valid');
        else
            $('#inputLastname').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputPatronymic',
    'regex:/^\\s*[a-zа-яё]{1}[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректное отчество',
    (isValid) => {
        if (isValid)
            $('#inputPatronymic').addClass('buy-form__valid');
        else
            $('#inputPatronymic').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputEmail',
    'regex:/^\\s*([a-z0-9_-]+\\.)*[a-z0-9_-]+@[a-z0-9_-]+(\\.[a-z0-9_-]+)*\\.[a-z]{2,6}\\s*$/i:Введите корректный e-mail адрес',
    (isValid) => {
        if (isValid)
            $('#inputEmail').addClass('buy-form__valid');
        else
            $('#inputEmail').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputRegion',
    'regex:/^\\s*[a-zа-яё]{1}[a-zа-яё\\(\\)\\.,\\s_-]+\\s*$/i:Введите корректную область (край) или район',
    (isValid) => {
        if (isValid)
            $('#inputRegion').addClass('buy-form__valid');
        else
            $('#inputRegion').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputIndex',
    'regex:/^\\s*[0-9]{6}\\s*$/i:Введите корректный почтовый индекс (6 цифр)',
    (isValid) => {
        if (isValid)
            $('#inputIndex').addClass('buy-form__valid');
        else
            $('#inputIndex').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputMobile',
    'regex:/^\\s*\\+?([-\\s:\\(\\)]?[0-9]){7,}\\s*$/i:Введите корректный мобильный телефон',
    (isValid) => {
        if (isValid)
            $('#inputMobile').addClass('buy-form__valid');
        else
            $('#inputMobile').removeClass('buy-form__valid');
    }
);