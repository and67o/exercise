<?php

namespace Router\Controller;

use Router\Controller\CommonController;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class LiskovSubstitution
 */
class LiskovSubstitution extends CommonController
{
	protected $tplName = 'Solid/LiskovSubstitution';
	protected $pageTitle = 'LiskovSubstitution';
	
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