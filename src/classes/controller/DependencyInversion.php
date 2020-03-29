<?php


namespace Router\Controller;


use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class DependencyInversion
 * @package Router\Controller
 */
class DependencyInversion extends CommonController
{
	protected $tplName = 'Solid/DependencyInversion';
	protected $pageTitle = 'DependencyInversion';
	
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