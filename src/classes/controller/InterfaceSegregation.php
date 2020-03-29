<?php


namespace Router\Controller;


use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class InterfaceSegregationPrinciple
 * @package Router\Controller
 */
class InterfaceSegregation extends CommonController
{
	protected $tplName = 'Solid/InterfaceSegregation';
	protected $pageTitle = 'InterfaceSegregation';
	
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