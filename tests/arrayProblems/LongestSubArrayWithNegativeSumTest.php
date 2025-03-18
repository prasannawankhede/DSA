<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LongestSubArrayWithNegativeSum;

class LongestSubArrayWithNegativeSumTest extends TestCase
{
    private $longestSubArray;

    protected function setUp(): void
    {
        $this->longestSubArray = new LongestSubArrayWithNegativeSum();
    }

    /**
     * @dataProvider subArrayDataProvider
     */
    public function testGetLongestSubarray($arr, $k, $expected)
    {
        $result = $this->longestSubArray->getLongestSubarray($arr, $k);
        $this->assertEquals($expected, $result);
    }

    public static function subArrayDataProvider()
    {
        return [
            // Positive and negative numbers
            [[1, -1, 5, -2, 3], 3, 4],  // [1, -1, 5, -2]
            [[-2, -1, 2, 1], 1, 2],     // [2, -1] or [-1, 2]

            // Edge cases
            [[], 5, 0],                 // Empty array
            [[-5, 8, -14, 2, 4, 12], -5, 5], // [8, -14, 2, 4, 12]

            // No subarray with the given sum
            [[1, 2, 3], 10, 0],         // No subarray with sum 10
        ];
    }
}
