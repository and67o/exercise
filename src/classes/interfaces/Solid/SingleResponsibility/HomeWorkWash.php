<?php

/**
 * Interface HomeWorkWash
 */
interface HomeWorkWash
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
}