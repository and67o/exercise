<?php


namespace Router\Controller;


use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class Algorithms
 * @package Router\src\classes\controller
 */
class Algorithms extends CommonController
{
	
	protected $tplName = 'Algoritms/Algoritms';
	protected $pageTitle = 'Алгоритмы';
	
	/**
	 *
	 */
	public function index()
	{
		try {
			$this->render();
		} catch (RuntimeError $e) {
		} catch (SyntaxError $e) {
		}
	}
}
