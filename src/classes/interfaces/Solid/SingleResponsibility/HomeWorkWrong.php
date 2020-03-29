<?php

/**
 * Interface HomeWorkWrong
 */
interface HomeWorkWrong
{
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheWindow(int $water) : bool;
	
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheFloor(int $water) : bool;
	
	/**
	 * @param int $water how many water
	 * @return bool
	 */
	public function washTheDishes(int $water) : bool;
	
	/**
	 * @param array $instruments
	 * @return bool
	 */
	public function fixTheTable(array $instruments) : bool;
	
	/**
	 * @param array $instruments
	 * @return bool
	 */
	public function fixTheChair(array $instruments) : bool;
}
