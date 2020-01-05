<?php


namespace Router\TemplateMethod;

/**
 * Class Parents
 * @package Router\TemplateMethod
 */
class Parents extends FamilyTemplate
{
	
	protected $familyMember = 'parent';
	protected $isParent = true;
	
	public function doHomeWork()
	{
		echo 'clean the room';
	}
	
	public function allDay()
	{
		$this->wakeUp();
		$this->makeBreakfast();
		$this->goToPlace('work');
		$this->doHomeWork();
		$this->sleepForMorning();
	}
}
