<?php


namespace Router\Controller;


use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class Solid
 * @package Router\src\classes\controller
 */
class Solid extends CommonController
{
	protected $tplName = 'Solid/Solid';
	protected $pageTitle = 'Solid';
	
	public function index() {
		try {
			$this->render();
		} catch (RuntimeError $e) {
		} catch (SyntaxError $e) {
		}
	}
}