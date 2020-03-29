<?php

namespace Router\Controller;

/**
 * Главная страница
 * Class MainPage
 * @package Router\src\classes\controller
 */
class MainPage extends CommonController
{
	
	protected $tplName = 'MainPage/MainPage';
	protected $pageTitle = 'Главная';
	
	/**
	 * Главная страницы
	 */
	public function index()
	{
		$this->render();
	}
	
}
