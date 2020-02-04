<?php

namespace app\controllers;

use app\controllers\AbstractMainController;
use Exception;
use app\config\Mail;

class MainController extends AbstractMainController
{

	/**
	 * Конструктор
	 *
	 * @param array $route Параметры маршрута
	 */
	public function __construct($route)
	{
		$route['controller'] = 'main';
		parent::__construct($route);

		$action = 'action' . $route['action'];
		$this->$action();
	}

	/**
	 * Главная страница
	 *
	 * @return void
	 */
	public function actionIndex()
	{
		$this->title = 'DOMWatches.ru — Эксклюзивные часы DOM';
		$this->meta_desc = 'На сайте предоставляются современные мужские часы DOM M-635 по низкой цене. Быстрая доставка, гарантия, оплата при получении на руки.';
		$this->meta_key = 'часы DOM, наручные часы, мужские часы, магазин, модель M-635';
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'jquery.flipper-responsive.min.js', 'aos.min.js', 'moment.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'countdown.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('index', $params, true);
		$this->render($content);
	}

	/**
	 * Покупка
	 *
	 * @return void
	 */
	public function actionBuy()
	{
		$this->title = 'Заказать часы DOM';
		$this->meta_desc = 'Купить мужские часы DOM M-635 по скидке. Доставка почтой России.';
		$this->meta_key = 'заказать часы DOM, купить часы DOM, форма заказа';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'bootstrap-validate.min.js', 'buy-validation.min.js', 'jquery.bootstrap-touchspin.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'countdown.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('buy', $params, true);
		$this->render($content);
	}

	/**
	 * Проверка данных заказа и отправка на почту
	 *
	 * @return void
	 */
	public function actionBuyCheck()
	{
		$params = [
			'watches' => $_POST['inputWatches'] ?? null,
			'price' => $_POST['inputPrice'] ?? null,
			'name' => $_POST['inputName'] ?? null,
			'lastname' => $_POST['inputLastname'] ?? null,
			'patronymic' => $_POST['inputPatronymic'] ?? null,
			'email' => $_POST['inputEmail'] ?? null,
			'region' => $_POST['inputRegion'] ?? null,
			'city' => $_POST['inputCity'] ?? null,
			'address' => $_POST['inputAddress'] ?? null,
			'index' => $_POST['inputIndex'] ?? null,
			'mobile' => $_POST['inputMobile'] ?? null,
			'comment' => $_POST['inputComment'] ?? null
		];

		$params = array_map(function($e) { 
			if ($e == null)
				return $e;
			if (is_array($e)) {
				foreach ($e as &$value) 
					$value = htmlspecialchars($value);
				return $e;
			}
			return htmlspecialchars($e);
		 }, $params);

		$errors = $this->model->getBuyParamsErrors($params);
		if (!empty($errors)) {
			echo "Неверно заполнены поля: " . implode(", ", $errors) . '.';
			exit();
		}

		$params['ip'] = $_SERVER['REMOTE_ADDR'];
		$params['date'] = gmdate("d.m.y, H:i");
		$bodyHTML = $this->view->render('orderHTML', $params, true);
		$bodyText = $this->view->render('orderText', $params, true);

		$mailParams = [
			'username' => Mail::$usernameSMTP,
			'password' => Mail::$passwordSMTP,
			'host' => Mail::$hostSMTP,
			'port' => Mail::$portSMTP,
			'to' => Mail::$to,
			'topic' => Mail::$topics['order'],
			'from' => [
				'email' => Mail::$usernameSMTP,
				'name' => Mail::$nameSMTP	
			],
			'bodyHTML' => $bodyHTML,
			'bodyText' => $bodyText
		];

		try {
			$this->model->sendMessage($mailParams);
		} catch (Exception $e) {
			echo $e->getMessage();
			exit();
		}

		echo "success";
	}

	/**
	 * Фото
	 *
	 * @return void
	 */
	public function actionPhoto()
	{
		$this->title = 'Фотоальбом часов DOM M-635';
		$this->meta_desc = 'Демонстрация часов DOM M-635 отдельно и на руке мужчины. Качественные фото с разных ракурсов.';
		$this->meta_key = 'фото часов DOM, фотоальбом, часы DOM в картинках, модель M-635';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'jquery.fancybox.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'jquery.fancybox.min.css', 'main.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('photo', $params, true);
		$this->render($content);
	}

	/**
	 * Отзывы
	 *
	 * @return void
	 */
	public function actionReviews()
	{
		$this->title = 'Отзывы о часах DOM M-635';
		$this->meta_desc = 'Отзывы реальных людей, купивших часы DOM на данном сайте. Преимущества, недостатки и комментарии от покупателей.';
		$this->meta_key = 'реальные отзывы, отзывы о часах DOM, отзывы о сайте, преимущества, недостатки';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('reviews', $params, true);
		$this->render($content);
	}

	/**
	 * Вопрос-ответ
	 *
	 * @return void
	 */
	public function actionFaq()
	{
		$this->title = 'Ответы на часто задаваемые вопросы';
		$this->meta_desc = 'Ответы на вопросы доставки, гарантии, оплате, работе часов DOM';
		$this->meta_key = 'ответы на вопросы, faq, часто задаваемые вопросы';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('faq', $params, true);
		$this->render($content);
	}

	/**
	 * Контакты
	 *
	 * @return void
	 */
	public function actionContacts()
	{
		$this->title = 'Обратная связь с DOMWatches.ru';
		$this->meta_desc = 'Свяжитесь с нами по телефону, электронной почте или через форму обратной связи, если у Вас возникли какие-либо вопросы!';
		$this->meta_key = 'обратная связь, техническая поддержка, написать письмо, заказать звонок';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'bootstrap-validate.min.js', 'feedback-validation.min.js', 'main.min.js', 'global://cdn.perezvoni.com/widget/js/przv.js?przv_code=30258-b140b75-0efcbbf9204e631b140-4e631b140b75-cd10efcbb'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css', 'fontello.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('contacts', $params, true);
		$this->render($content);
	}

	/**
	 * Проверка данных обратной связи и отправка на почту
	 *
	 * @return void
	 */
	public function actionFeedbackCheck()
	{
		$params = [
			'name' => $_POST['inputName'] ?? null,
			'topic' => $_POST['inputTopic'] ?? null,
			'email' => $_POST['inputEmail'] ?? null,
			'message' => $_POST['inputMessage'] ?? null
		];

		$params = array_map(function($e) { return $e == null ? $e : htmlspecialchars($e); }, $params);

		$errors = $this->model->getFeedbackParamsErrors($params);
		if (!empty($errors)) {
			echo "Неверно заполнены поля: " . implode(", ", $errors) . '.';
			exit();
		}

		$params['ip'] = $_SERVER['REMOTE_ADDR'];
		$params['date'] = gmdate("d.m.y, H:i");
		$bodyHTML = $this->view->render('feedbackHTML', $params, true);
		$bodyText = $this->view->render('feedbackText', $params, true);

		$mailParams = [
			'username' => Mail::$usernameSMTP,
			'password' => Mail::$passwordSMTP,
			'host' => Mail::$hostSMTP,
			'port' => Mail::$portSMTP,
			'to' => Mail::$to,
			'topic' => htmlspecialchars($params['topic']),
			'from' => [
				'email' => Mail::$usernameSMTP,
				'name' => Mail::$nameSMTP				
			],
			'bodyHTML' => $bodyHTML,
			'bodyText' => $bodyText
		];

		try {
			$this->model->sendMessage($mailParams);
		} catch (Exception $e) {
			echo $e->getMessage();
			exit();
		}

		echo "success";
	}

	/**
	 * Политика конфиденциальности
	 *
	 * @return void
	 */
	public function actionPolicy()
	{
		$this->title = 'Политика конфиденциальности';
		$this->meta_desc = 'Инфмация по обработке персональных данных Пользователя сайтом DOMWatches.ru';
		$this->meta_key = 'политка конфиденциальности, обработка персональных данных';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css', 'fontello.min.css'];

		$params = [];
		$content = $this->view->render('policy', $params, true);
		$this->render($content);
	}
}
