(function () {
    let params = {
        name: {
            error: true,
            rus: 'имя'
        },
        email: {
            error: true,
            rus: 'email'
        },
        message: {
            error: true,
            rus: 'сообщение'         
        },
        topic: {
            error: true,
            rus: 'тема'         
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
        '#inputTopic',
        'regex:/^.+$/i:Введите корректную тему',
        (isValid) => {
            if (isValid) {
                $('#inputTopic').addClass('buy-form__valid');
                params['topic']['error'] = false;
            }
            else {
                $('#inputTopic').removeClass('buy-form__valid');
                params['topic']['error'] = true;
            }
        }
    );

    bootstrapValidate(
        '#inputMessage',
        'regex:/^.+$/i:Введите сообщение',
        (isValid) => {
            if (isValid) {
                $('#inputMessage').addClass('buy-form__valid');
                params['message']['error'] = false;
            }
            else {
                $('#inputMessage').removeClass('buy-form__valid');
                params['message']['error'] = true;
            }
        }
    );

    window.bootstrapFeedbackParams = params;
})();