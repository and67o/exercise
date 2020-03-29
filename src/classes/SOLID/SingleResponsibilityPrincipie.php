<?php

//Принцип единственной ответственности

/**
 * Class of homeWork
 * Class HomeWork
 */
class HomeWork implements HomeWorkWrong
{
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheWindow(int $water) : bool
	{
		$litres = 2;
		return 'wash windows';
	}
	
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheFloor(int $water) : bool
	{
		$litres = 2;
		return 'wash the floor';
	}
	
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheDishes(int $water) : bool
	{
		$litres = 2;
		return 'wash the dishes';
	}
	
	/**
	 * @param array $instruments
	 * @return bool
	 */
	public function fixTheTable(array $instruments) : bool
	{
		return 'fix the table';
	}
	
	/**
	 * @param array $instruments
	 * @return bool
	 */
	public function fixTheChair(array $instruments) : bool
	{
		return 'fix the chair';
	}
	
}

/**
 * Class with Cleaning
 * Class Cleaning
 */
class Cleaning implements HomeWorkWash
{
	protected $litres;
	
	public function __construct(int $litres = 2)
	{
		$this->litres;
	}
	
	/**
	 * Cleaning constructor.
	 * @param int $water
	 * @return bool
	 */
	public function washTheWindow(int $water) : bool
	{
		$litres = $this->litres;
		return 'wash windows';
	}
	
	/**
	 * Cleaning constructor.
	 * @param int $water
	 * @return bool
	 */
	public function washTheFloor(int $water) : bool
	{
		$litres = $this->litres;
		return 'wash the floor';
	}
	
	/**
	 * Cleaning constructor.
	 * @param int $water
	 * @return bool
	 */
	public function washTheDishes(int $water) : bool
	{
		$litres = $this->litres;
		return 'wash the dishes';
	}
	
}

/**
 * Class of Fix
 * Class Fix
 */
class Fix implements HomeWorkFix
{
	protected $instruments;
	
	public function __construct(array $instruments)
	{
		$this->instruments;
	}
	
	public function fixTheTable(array $instruments) : bool
	{
		return 'fix the table';
	}
	
	public function fixTheChair(array $instruments) : bool
	{
		return 'fix the chair';
	}
}
