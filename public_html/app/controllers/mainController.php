<?php

namespace app\controllers;

use app\controllers\AbstractMainController;
use app\modules\Header;

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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'jquery.flipper-responsive.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'countdown.min.css', 'aos.min.css'];

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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'aos.min.js', 'bootstrap-validate.min.js', 'form-validation.min.js', 'jquery.bootstrap-touchspin.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'countdown.min.css', 'aos.min.css'];

		$params = [];
		$content = $this->view->render('buy', $params, true);
		$this->render($content);
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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css'];

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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css'];

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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'aos.min.js', 'main.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css'];

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
		$this->scripts = ['jquery-3.4.1.min.js', 'parallax.min.js', 'popper.min.js', 'bootstrap.min.js', 'fontawesome.min.js', 'aos.min.js', 'main.min.js', 'global://cdn.perezvoni.com/widget/js/przv.js?przv_code=30258-b140b75-0efcbbf9204e631b140-4e631b140b75-cd10efcbb'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', 'main.min.css', 'aos.min.css'];

		$params = [];
		$content = $this->view->render('contacts', $params, true);
		$this->render($content);
	}
}
