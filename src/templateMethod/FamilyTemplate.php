<?php


namespace Router\TemplateMethod;

/**
 * Class FamilyTemplate
 * @package Router\TemplateMethod
 */
abstract class FamilyTemplate
{
	/**
	 * @var string
	 */
	protected $familyMember;
	/**
	 * @var string
	 */
	protected $isParent;
	
	public function wakeUp()
	{
		echo sprintf('%s wake up', $this->familyMember) . '<br>';
	}
	
	protected function sleep()
	{
		return '';
	}
	
	public function sleepForMorning()
	{
		echo sprintf('%s sleep for morning ', $this->familyMember) . '<br>';
	}
	
	public function makeBreakfast()
	{
		if ($this->isParent) {
			echo sprintf('%s make breakfast', $this->familyMember) . '<br>';
		}
	}
	
	/**
	 * @param string $place
	 */
	public function goToPlace(string $place)
	{
		echo sprintf('go to %s', $place) . '<br>';
	}
	
	abstract public function doHomeWork();
	
	abstract public function allDay();
	
	
	public function goHome()
	{
		echo sprintf('%s go home', $this->familyMember) . '<br>';
	}
	
	protected function playGames()
	{
		return '';
	}
}
