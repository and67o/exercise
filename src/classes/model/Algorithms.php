<?php


namespace Router\Models;


class Algorithms
{
	/**
	 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
	 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
	 * @phpunit
	 * @param array $nums
	 * @param int $target
	 * @return array
	 */
	public static function twoSumVerOne(array $nums, int $target) : array
	{
		for ($i = 0; $i < count($nums); $i++) {
			for ($j = $i + 1; $j < count($nums); $j++) {
				if ($nums[$j] == $target - $nums[$i]) {
					return [$i, $j];
				}
			}
		}
		return [];
	}
	
	/**
	 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
	 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
	 * @phpunit
	 * @param array $nums
	 * @param int $target
	 * @return array
	 */
	public static function twoSumTwo(array $nums, int $target) : array
	{
		foreach ($nums as $numKey => $num) {
			foreach ($nums as $numELemKey => $numELem) {
				if ($numELemKey == $numKey) {
					continue;
				}
				$sum = $num + $numELem;
				if ($sum == $target) {
					return [
						$numKey,
						$numELemKey
					];
				}
			}
		}
		return [];
	}
	
	/**
	 * Given a 32-bit signed integer, reverse digits of an integer.
	 * Assume we are dealing with an environment which could only store integers
	 * within the 32-bit signed integer range: [−231,  231 − 1].
	 * For the purpose of this problem, assume that your function returns 0 when the reversed integer overflows.
	 * @param int $x
	 * @return int
	 */
	public static function reverse($x)
	{
		if ($x == 0) {
			return 0;
		}
		$s1 = str_split($x);
		$firstNumber = (int) $s1[0];
		$firstChar = $firstNumber > 0 && is_int($firstNumber) ? '' : $s1[0];
		$result = $firstChar . (int) implode('', array_reverse($s1));
		if (!($result > -pow(2, 31) && $result < pow(2, 31) - 1)) {
			return 0;
		}
		return (int) $result;
	}
	
	/**
	 * Given a sorted array and a target value, return the index if the target is found.
	 * If not, return the index where it would be if it were inserted in order.
	 * @param array $nums
	 * @param int $target
	 * @return int
	 */
	public static function searchInsertOne($nums, $target)
	{
		$neededIndex = array_search($target, $nums);
		if ($neededIndex !== false) {
			return $neededIndex;
		}
		if ($target == 0) {
			return 0;
		}
		
		for ($i = 0; $i < count($nums); $i++) {
			$nextElem = isset($nums[$i + 1]) ? $nums[$i + 1] : $nums[count($nums) - 1];
			$prevElem = isset($nums[$i - 1]) ? $nums[$i - 1] : $nums[0];
			if ($target > $prevElem && $target < $nextElem) {
				return $i + 1;
			}
			
		}
		return ($nums[0] > $target) ? 0 : count($nums);
	}
	
	/**
	 * Given a sorted array and a target value, return the index if the target is found.
	 * If not, return the index where it would be if it were inserted in order.
	 * @param array $nums
	 * @param int $target
	 * @return int
	 */
	public static function searchInsertTwo($nums, $target)
	{
		if (end($nums) < $target) {
			return count($nums);
		}
		foreach ($nums as $key => $value) {
			if ($value >= $target) {
				return $key;
				break;
			}
		}
	}
	
	/**
	 * Given a non-empty array of integers, every element appears twice except for one. Find that single one.
	 * @param array $nums
	 * @return mixed
	 */
	public static function singleNumberOne($nums)
	{
		return array_flip(array_count_values($nums))[1];
	}
	
	/**
	 * Given a non-empty array of integers, every element appears twice except for one. Find that single one.
	 * @param array $nums
	 * @return mixed
	 */
	public static function singleNumberTwo($nums)
	{
		return 2 * array_sum(array_unique($nums)) - array_sum($nums);
	}
	
	/**
	 * @param $s
	 * @param $t
	 * @return bool
	 */
	public static function isAnagram($s, $t) {
		$s = str_split($s);
		$t = str_split($t);
		sort($s);
		sort($t);
		return  $s === $t;
	}
}
