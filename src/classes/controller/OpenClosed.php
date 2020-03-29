<?php
namespace Router\Controller;


use Router\Controller\CommonController;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class OpenClosed extends CommonController
{
	protected $tplName = 'Solid/OpenClosed';
	protected $pageTitle = 'OpenClosed';
	
	public function index()
	{
		try {
			$this->render();
		} catch (RuntimeError $e) {
		} catch (SyntaxError $e) {
		}
	}
}