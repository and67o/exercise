<?php


namespace Router\src\classes\controller;


class Algoritms extends CommonController
{
	
	protected $tplName = 'Algoritms/Algoritms';
	protected $pageTitle = 'Алгоритмы';
	
	public function index() {
		$this->render();
	}
}
