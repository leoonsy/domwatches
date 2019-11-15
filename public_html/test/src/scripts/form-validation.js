bootstrapValidate(
    '#inputName',
    'regex:/^[a-zа-я]{1}[a-zа-я\(\)\.,\s_-]+$/i:Введите правильно Ваше имя!',
    (isValid) => {
        if (isValid)
            $('#inputName').addClass('buy-form__valid');
        else
            $('#inputName').removeClass('buy-form__valid');
    }
);

bootstrapValidate(
    '#inputEmail',
    'email:Введите корректный e-mail адрес!',
    (isValid) => {
        if (isValid)
            $('#inputEmail').addClass('buy-form__valid');
        else
            $('#inputEmail').removeClass('buy-form__valid');
    }
);