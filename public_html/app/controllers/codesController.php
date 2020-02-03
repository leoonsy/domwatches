<?php

namespace app\controllers;

use app\controllers\AbstractCodesController;
use app\config\Config;

class CodesController extends AbstractCodesController {

	/**
	 * Конструктор
	 *
	 * @param array $route Параметры маршрута
	 */
	public function __construct($route)
	{
		$route['controller'] = 'codes';
		parent::__construct($route);

		$action = 'action'.$route['action'];
		$this->$action();
		exit();
	}

	/**
	 * Ошибка 404
	 *
	 * @return void
	 */
	public function action404() {
		$this->title = 'Ошибка 404';
		$this->meta_desc = 'Запрошенная страница не существует';
		$this->meta_key = 'Страница не найдена, страница не существует, 404';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', '404.min.css'];
		$this->meta = [
			[
				'name' => 'og:title',
				'content' => 'Ошибка 404'
			],
			[
				'name' => 'og:description',
				'content' => 'Запрошенная страница не существует'
			],
			[
				'name' => 'og:type',
				'content' => 'website'
			],
			[
				'name' => 'og:image',
				'content' => 'https://domwatches.ru/'. Config::DIR_PUBLIC . '/images/404.jpg'
			],
			[
				'name' => 'og:image:width',
				'content' => '496'
			],
			[
				'name' => 'og:image:height',
				'content' => '251'
			]
		];
		$content = $this->view->render('404', [], true);
		$this->render($content);
	}

	/**
	 * Ошибка 403
	 *
	 * @return void
	 */
	public function action403() {
		$this->title = 'Доступ запрещен';
		$this->meta_desc = 'К данной странице доступ запрещен';
		$this->meta_key = 'Доступ запрещен, 403, ошибка';
		$this->scripts = ['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.min.js'];
		$this->styles = ['global:https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', 'bootstrap.min.css', '404.min.css'];
		$this->meta = [
			[
				'name' => 'og:title',
				'content' => 'Доступ запрещен'
			],
			[
				'name' => 'og:description',
				'content' => 'К данной странице доступ запрещен'
			],
			[
				'name' => 'og:type',
				'content' => 'website'
			],
			[
				'name' => 'og:image',
				'content' => 'https://domwatches.ru/'. Config::DIR_PUBLIC . '/images/403.jpg'
			],
			[
				'name' => 'og:image:width',
				'content' => '485'
			],
			[
				'name' => 'og:image:height',
				'content' => '251'
			]
		];
		$content = $this->view->render('403', [], true);
		$this->render($content);
	}	
}