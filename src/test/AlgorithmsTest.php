<?php

namespace Router\Models;

use PHPUnit\Framework\TestCase;


class AlgorithmsTest extends TestCase
{
	/**
	 * @param $expected
	 * @param $strs
	 * @dataProvider providerGroupAnagrams
	 */
	public function testGroupAnagrams($expected, $strs)
	{
		$this->assertSame($expected, Algorithms::groupAnagramsOne($strs));
	}
	
	public function providerGroupAnagrams()
	{
		return [
			[
				['aet' => ["eat", "tea", "ate"], 'ant' => ["tan", "nat"], 'abt' => ["bat"]], ["eat", "tea", "tan", "ate", "nat", "bat"]
			],
		];
	}
	
	/**
	 * @param array $expected
	 * @param array $nums
	 * @param int $target
	 * @dataProvider providerTwoSum
	 */
	public function testTwoSum($expected, $nums, $target)
	{
		$this->assertSame($expected, Algorithms::twoSumVerOne($nums, $target));
		$this->assertSame($expected, Algorithms::twoSumTwo($nums, $target));
	}
	
	public function providerTwoSum()
	{
		return [
			[[0, 1], [2, 7, 11, 15], 9],
			[[0, 2], [1, 81, 14, 0], 15],
			[[0, 1], [2, 7], 9],
			[[3, 4], [3, 5, 8, 1, -1], 0],
			[[], [3, 5, 8, 1, -1], 67],
			[[0, 1], [0, 0, 0, 0, -1], 0],
		];
	}
	
	/**
	 * @param array $expected
	 * @param $x
	 * @dataProvider providerReverse
	 */
	public function testReverse($expected, $x)
	{
		$this->assertSame($expected, Algorithms::Reverse($x));
	}
	
	public function providerReverse()
	{
		return [
			[123, 321],
			[-123, -321],
			[21, 120],
			[584, 485],
			[-765, -567],
		];
	}
	
	/**
	 * @param array $expected
	 * @param $nums
	 * @param $target
	 * @dataProvider providerSearchInsert
	 */
	public function testSearchInsert($expected, $nums, $target)
	{
		$this->assertSame($expected, Algorithms::searchInsertOne($nums, $target));
		$this->assertSame($expected, Algorithms::searchInsertTwo($nums, $target));
	}
	
	/**
	 * @param array $expected
	 * @param $n
	 * @dataProvider providerCountPrimes
	 */
	public function testCountPrimes($expected, $n)
	{
		$this->assertSame($expected, Algorithms::countPrimes($n));
	}
	
	public function providerCountPrimes()
	{
		return [
			[4, 10],
			[0, 0],
			[32, 135],
			[0, 2],
			[15, 48],
			[19, 71],
		];
	}
	
	public function providerSearchInsert()
	{
		return [
			[2, [1, 3, 5, 6], 5],
			[4, [1, 3, 5, 6], 7],
			[4, [1, 3, 5, 6], 8],
			[1, [1, 3, 5, 6], 2],
			[0, [1, 3, 5, 6], 0],
		];
	}
	
	/**
	 * @param array $expected
	 * @param $nums
	 * @dataProvider providerSingleNumber
	 */
	public function testSingleNumber($expected, $nums)
	{
		$this->assertSame($expected, Algorithms::singleNumberOne($nums));
		$this->assertSame($expected, Algorithms::singleNumberTwo($nums));
	}
	
	public function providerSingleNumber()
	{
		return [
			[1, [2, 2, 1]],
			[4, [4, 1, 2, 1, 2]],
			[2, [11, 12, 11, 12, 2]],
			[2, [2, 8, 8, 0, 0, 0]],
		];
	}
	
	/**
	 * @param array $expected
	 * @param $s
	 * @param $t
	 * @dataProvider providerIsAnagram
	 */
	public function testIsAnagram($expected, $s, $t)
	{
		$this->assertSame($expected, Algorithms::isAnagram($s, $t));
	}
	
	public function providerIsAnagram()
	{
		return [
			[true, 'anagram', 'nagaram'],
			[false, 'rat', 'car'],
			[false, 'a', 'b'],
			[false, 'a', 'ab'],
		];
	}
	
	/**
	 * @param array $expected
	 * @param $nums
	 * @dataProvider providerMissingNumber
	 */
	public function testMissingNumber($expected, $nums)
	{
		$this->assertSame($expected, Algorithms::missingNumber($nums));
	}
	
	public function providerMissingNumber()
	{
		return [
			[2, [3,0,1]],
			[8, [9,6,4,2,3,5,7,0,1]],
		];
	}
}