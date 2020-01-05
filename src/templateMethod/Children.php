<?php


namespace Router\TemplateMethod;

/**
 * Class Children
 * @package Router\TemplateMethod
 */
class Children extends FamilyTemplate
{
	
	protected $familyMember = 'child';
	protected $isParent = false;
	
	public function sleep()
	{
		return 'sleep for breakfast' . '<br>';
	}
	
	protected function playGames()
	{
		echo 'play games' . '<br>';
	}
	
	public function doHomeWork()
	{
		echo 'do homework from school' . '<br>';
	}
	
	public function allDay()
	{
		$this->wakeUp();
		$this->sleep();
		$this->goToPlace('school');
		$this->goHome();
		$this->doHomeWork();
		$this->playGames();
		$this->sleepForMorning();
	}
}
