<?php


namespace Router\src\classes\controller;


use Router\Models\Tasks;

class Algorithms extends CommonController
{
	
	protected $tplName = 'Algoritms/Algoritms';
	protected $pageTitle = 'Алгоритмы';
	private $nameMethod;
	
	public function __construct($nameTask = '')
	{
		$this->nameMethod = $nameTask;
	}
	
	public function index()
	{
		$this->render([
			'tasks' => Tasks::TASKS
		]);
	}
	
	public function getNeedMethod() {
		$this->{$this->nameMethod}();
	}
	
	public function LongestCommonPrefix() {
	
	}
}
