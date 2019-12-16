<?php


namespace Router\src\classes\controller;


use Router\Router;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class CommonController
{
	/** @var string назваине шаблона */
	protected $tplName;
	/** @var string название страницы*/
	protected $pageTitle;

	/** Путь до шаблонов*/
	const BASE_TEMPLATE_PATH = 'src/templates/';
	
	/**
	 * Рендер Шаблона
	 * @param array $params
	 * @throws RuntimeError
	 * @throws SyntaxError
	 */
	public function render($params = [])
	{
		$loader = new FilesystemLoader(self::BASE_TEMPLATE_PATH);
		$twig = new Environment($loader);
		try {
			echo $twig->render(
				$this->tplName . '.twig',
				$params
			);
		} catch (LoaderError $e) {
			Router::getPage404();
		}
	}

	/**
	 * Получить ответ в формате JSON
	 * @param $var
	 * @param bool $send
	 * @return false|string
	 */
	public function toJSON($var, $send = false)
	{
		$result = json_encode($var);
		if ($send) {
			header('Content-Type: application/json; charset=utf-8');
			print($result);
			exit();
		}
		return $result;
	}
	
}
