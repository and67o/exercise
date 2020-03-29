<?php
// Принцип Открытости закрытости

/**
 * Class Phone
 */
class Phone
{
	/**
	 * @param $mark
	 * @return string
	 */
	public function getPrice($mark)
	{
		switch ($mark) {
			case 'apple':
				return '200$';
			case 'sony':
				return '100$';
		}
	}
}

/**
 * Class PhonePrice
 */
abstract class PhonePrice
{
	/**
	 * @return string
	 */
	abstract function getPrice() : string;
}

/**
 * Class Sony
 */
class Sony extends PhonePrice
{
	/**
	 * @return string
	 */
	function getPrice() : string
	{
		return '100$';
	}
}

/**
 * Class Apple
 */
class Apple extends PhonePrice
{
	/**
	 * @return string
	 */
	function getPrice() : string
	{
		return '200$';
	}
}
