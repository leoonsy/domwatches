<?php

namespace app\config;

abstract class Mail
{
    public static $to = [
        [
            'email' => 'yashanovsky.sergey@ya.ru',
            'name' => 'Яшановский Сергей'
        ],
		[
            'email' => 'support@domwatches.ru',
            'name' => 'Яшановский Сергей'
        ]
    ];

    public static $topics = [
        'order' => 'Заказ часов DOM'
    ];   

    public static $usernameSMTP = 'support@domwatches.ru';
    public static $nameSMTP = 'Яшановский Сергей';
    public static $passwordSMTP = 'password :)';
    public static $hostSMTP = 'ssl://smtp.yandex.ru';
    public static $portSMTP = 465;
}
