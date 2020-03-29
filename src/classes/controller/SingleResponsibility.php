<?php

namespace Router\Controller;


use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class SingleResponsibility
 */
class SingleResponsibility extends CommonController
{
	protected $tplName = 'Solid/SingleResponsibility';
	protected $pageTitle = 'SingleResponsibility';
	
	/**
	 * 
	 */	
	public function index()
	{
		try {
			$this->render();
		} catch (RuntimeError $e) {
			echo $e->getMessage();
		} catch (SyntaxError $e) {
			echo $e->getMessage();
		}
	}
}