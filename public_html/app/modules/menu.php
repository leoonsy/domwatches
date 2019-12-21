<?php
namespace app\modules;

class Menu {
    protected $links;
    protected $currentUrl;

    protected static $menu = [
        ['name' => 'ГЛАВНАЯ', 'URL' => '/'],
        ['name' => 'ЗАКАЗАТЬ', 'URL' => '/buy'],
        ['name' => 'ФОТО', 'URL' => '/photo'],
        ['name' => 'ОТЗЫВЫ', 'URL' => '/reviews'],
        ['name' => 'ВОПРОС-ОТВЕТ', 'URL' => '/faq'],
        ['name' => 'КОНТАКТЫ', 'URL' => '/contacts'],
    ];

    public static function getMenu($currentURL) {
        $result = self::$menu; //глубокое копирование
        foreach ($result as &$elem) {
            if ($elem['URL'] === $currentURL)
                $elem['active'] = true;
            else
                $elem['active'] = false;
        }
        return $result;
    }
}
