<?php

namespace app\models;

use app\core\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Main extends Model
{
    /**
     * Параметры для проверок при покупке товара
     *
     * @var array
     */
    private $params = [
        'name' => [
            'regular' => '/^\s*[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'имя'
        ],
        'lastname' => [
            'regular' => '/^\s*[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'фамилия'
        ],
        'patronymic' => [
            'regular' => '/^\s*[a-zа-яё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'отчество'
        ],
        'email' => [
            'regular' => '/^\s*([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}\s*$/iu',
            'rus' => 'email'
        ],
        'region' => [
            'regular' => '/^\s*[a-zа-я0-9ё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'область (край), район'
        ],
        'city' => [
            'regular' => '/^\s*[a-zа-я0-9ё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'город/село'
        ],
        'address' => [
            'regular' => '/^\s*[a-zа-я0-9ё\(\)\.,\s_-]+\s*$/iu',
            'rus' => 'адрес (улица, дом, квартира...)'
        ],
        'index' => [
            'regular' => '/^\s*[0-9]{6}\s*$/iu',
            'rus' => 'почтовый индекс'
        ],
        'mobile' => [
            'regular' => '/^\s*\+?([-\s:\(\)]?[0-9]){7,}\s*$/iu',
            'rus' => 'мобильный телефон'
        ],
        'topic' => [
            'regular' => '/^.+$/iu',
            'rus' => 'тема'
        ],
        'comment' => [
            'regular' => '/^.*$/iu',
            'rus' => 'от себя'
        ],
        'message' => [
            'regular' => '/^.+$/iu',
            'rus' => 'сообщение'
        ]
    ];

    /**
     * Проверить данные заказа на ошибки
     *
     * @param array $data
     * @return array
     */
    public function getBuyParamsErrors($data)
    {
        //есть ли незаполненные поля
        $errors = from($data)->where(function ($v) {
            return $v === null;
        })->select(function ($v, $k) {
            return $k;
        })->toList();

        //проверка на корректность регулярными выражениями
        foreach ($data as $key => $value)
            if (
                isset($this->params[$key])
                && !preg_match($this->params[$key]['regular'], $value)
                && !in_array($key, $errors)
            )
                $errors[] = $key;

        //преобразование ошибок на русский язык
        $errors = from($errors)->select(function ($e) {
            return $this->params[$e]['rus'];
        })->toList();

        //проверка на корректность количества часов
        if (is_array($data['watches'])) {
            $watches = ['M-635D-1M9', 'M-635BK-1M', 'M-635L-1M9', 'M-635L-7M'];
            $watchError = false;
            foreach ($watches as $watch) {
                if (!(in_array($watch, array_keys($data['watches']))
                    && is_numeric($data['watches'][$watch])
                    && !in_array('количество часов ' . $watch, $errors))) {
                    $errors[] = 'количество часов ' . $watch;
                    $watchError = true;
                }
            }
            if (!$watchError) {
                if (from($data['watches'])->all(function ($e) {
                    return $e == 0;
                }))
                    $errors[] = 'выберите хотя бы одни часы для покупки';
            }
        } else {
            $errors[] = 'не выбраны часы для покупки';
        }

        return $errors;
    }

    /**
     * Проверить данные обратной связи на ошибки
     *
     * @param array $data
     * @return array
     */
    public function getFeedbackParamsErrors($data)
    {
        //есть ли незаполненные поля
        $errors = from($data)->where(function ($v) {
            return $v === null;
        })->select(function ($v, $k) {
            return $k;
        })->toList();

        //проверка на корректность регулярными выражениями
        foreach ($data as $key => $value)
            if (
                isset($this->params[$key])
                && !preg_match($this->params[$key]['regular'], $value)
                && !in_array($key, $errors)
            )
                $errors[] = $key;

        //преобразование ошибок на русский язык
        $errors = from($errors)->select(function ($e) {
            return $this->params[$e]['rus'];
        })->toList();

        return $errors;
    }

    /**
     * Отправить сообщение о заказе на почту
     *
     * @param array $params
     * @return void
     */
    public function sendMessage($params)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->CharSet = "utf-8";
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 2;
            $mail->Host = $params['host'];
            $mail->Port = $params['port'];
            $mail->SMTPSecure = 'ssl';
            $mail->Username = $params['username'];
            $mail->Password = $params['password'];

            $mail->setFrom($params['from']['email'], $params['from']['name']);
            foreach ($params['to'] as $address)
                $mail->addAddress($address['email'], $address['name']);

            $mail->isHTML(true);
            $mail->Subject = $params['topic'];
            $mail->Body    = $params['bodyHTML'];
            $mail->AltBody = $params['bodyText'];
            $mail->send();
        } catch (Exception $e) {
            throw new Exception("Ошибка отправки письма: {$mail->ErrorInfo}");
        }
    }
}
