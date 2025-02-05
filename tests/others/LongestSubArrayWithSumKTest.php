<?php

use PHPUnit\Framework\TestCase;
use App\LongestSubArrayWithSumK;

class LongestSubArrayWithSumKTest extends TestCase
{
    /**
     * @dataProvider validSubArrayProvider
     */
    public function testFindWithValidSubArray($array, $sum, $expectedLength)
    {
        $longestSubArray = new LongestSubArrayWithSumK();
        $result = $longestSubArray->find($array, $sum);
        $this->assertEquals($expectedLength, $result);
    }

    public static function validSubArrayProvider()
    {
        return [
            [[1, 2, 3, 7, 5], 12, 4],
            [[1, 1, 1, 1], 2, 2],
            [[1, 2, 1, 1, 1], 4, 3],
        ];
    }

    /**
     * @dataProvider noValidSubArrayProvider
     */
    public function testFindWithNoValidSubArray($array, $sum, $expectedLength)
    {
        $longestSubArray = new LongestSubArrayWithSumK();
        $result = $longestSubArray->find($array, $sum);
        $this->assertEquals($expectedLength, $result);
    }

    public static function noValidSubArrayProvider()
    {
        return [
            [[1, 2, 3, 4, 5], 20, 0],
            [[], 5, 0],
        ];
    }

    /**
     * @dataProvider singleElementSubArrayProvider
     */
    public function testFindWithSingleElementSubArray($array, $sum, $expectedLength)
    {
        $longestSubArray = new LongestSubArrayWithSumK();
        $result = $longestSubArray->find($array, $sum);
        $this->assertEquals($expectedLength, $result);
    }

    public static function singleElementSubArrayProvider()
    {
        return [
            [[5, 1, 2, 3], 5, 1],
            [[1, 2, 3, 4, 10], 10, 1],
        ];
    }

    /**
     * @dataProvider negativeNumbersProvider
     */
    public function testFindWithNegativeNumbers($array, $sum, $expectedLength)
    {
        $longestSubArray = new LongestSubArrayWithSumK();
        $result = $longestSubArray->find($array, $sum);
        $this->assertEquals($expectedLength, $result);
    }

    public static function negativeNumbersProvider()
    {
        return [
            [[-1, -2, 3, 4, -3], 4, 3],
            [[-5, -1, 2, 6, 1], 8, 3],
        ];
    }
}
