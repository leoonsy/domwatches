<?php

namespace app\models;

use app\core\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Main extends Model
{
    /**
     * Различные параметры для проверок при покупке товара
     *
     * @var array
     */
    private $buyParams = [
        'name' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'имя'
        ],
        'lastname' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'фамилия'
        ],
        'patronymic' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'отчество'
        ],
        'email' => [
            'regular' => '/^\s*([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}\s*$/iu',
            'rus' => 'email'
        ],
        'region' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'область (край), район'
        ],
        'city' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-я0-9ё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'город/село'
        ],
        'address' => [
            'regular' => '/^\s*[a-zа-яё]{1}[a-zа-я0-9ё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'адрес (улица, дом, квартира...)'
        ],
        'index' => [
            'regular' => '/^\s*[0-9]{6}\s*$/iu',
            'rus' => 'почтовый индекс'
        ],
        'mobile' => [
            'regular' => '/^\s*\+?([-\s:\(\)]?[0-9]){7,}\s*$/iu',
            'rus' => 'мобильный телефон'
        ]
    ];

    /**
     * Проверить параметры заказа на ошибки
     *
     * @param array $params
     * @return array
     */
    public function checkBuyParams($params)
    {
        //есть ли незаполненные поля
        $errors = from($params)->where(function ($v) {
            return $v === null;
        })->select(function ($v, $k) {
            return $k;
        })->toList();

        //проверка на корректность регулярными выражениями
        foreach ($params as $key => $value)
            if (
                isset($this->buyParams[$key])
                && !preg_match($this->buyParams[$key]['regular'], $value)
                && !in_array($key, $errors)
            )
                $errors[] = $key;

        //преобразование ошибок на русский язык
        $errors = from($errors)->select(function ($e) {
            return $this->buyParams[$e]['rus'];
        })->toList();

        //проверка на корректность количества часов
        if (is_array($params['watches'])) {
            $watches = ['M-635D-1M9', 'M-635BK-1M', 'M-635L-1M9', 'M-635L-7M'];
            foreach ($watches as $watch) {
                if (!(in_array($watch, array_keys($params['watches']))
                    && is_numeric($params['watches'][$watch])
                    && !in_array('количество часов ' . $watch, $errors)))
                    $errors[] = 'количество часов ' . $watch;
            }
        }

        return $errors;
    }

    /**
     * Отправить сообщение о заказе на почту
     *
     * @param array $params
     * @return void
     */
    public function sendMessage($params) {
        $mail = new PHPMailer(true);
        try {   
            $mail->setFrom($params['from']['email'], $params['from']['name']);
            foreach ($params['to'] as $address)
                $mail->addAddress($address['email'], $address['name']);   
            
            $mail->isHTML(true);
            $mail->Subject = $params['subject'];
            $mail->Body    = $params['bodyHTML'];
            $mail->AltBody = $params['bodyText'];
            $mail->send();
        } catch (Exception $e) {
            throw new Exception("Ошибка отправки письма: {$mail->ErrorInfo}");
        }
    }
}
