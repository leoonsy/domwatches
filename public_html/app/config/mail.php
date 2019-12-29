<?php

namespace app\config;

abstract class Mail
{
    public static $to = [
        [
            'email' => 'yashanovsky.sergey@ya.ru',
            'name' => 'Яшановский Сергей'
        ]
    ];

    public static $topics = [
        'order' => 'Заказ часов DOM'
    ];   
}
