<?php

/**
 * Interface HomeWorkFix
 */
interface HomeWorkFix
{
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