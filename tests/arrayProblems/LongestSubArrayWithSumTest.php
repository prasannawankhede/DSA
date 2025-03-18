<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LongestSubArrayWithSum;

class LongestSubArrayWithSumTest extends TestCase
{
    private $longestSubArray;

    protected function setUp(): void
    {
        $this->longestSubArray = new LongestSubArrayWithSum();
    }

    /**
     * @dataProvider subArrayDataProvider
     */
    public function testSubArray($arr, $k, $expected)
    {
        $result = $this->longestSubArray->subArray($arr, $k);
        $this->assertEquals($expected, $result);
    }

    public static function subArrayDataProvider()
{
    return [
        // Basic Cases
        [[1, 2, 3, 4, 5], 5, 2],         // [2, 3] or [5]
        [[1, 1, 1, 1, 1], 2, 2],         // [1, 1]
        [[5, 5, 5, 5], 5, 1],            // [5]

        // Edge Cases
        [[], 5, 0],                      // Empty array
        [[2, 3, 1, 2, 4, 3], 7, 3],      // [3, 1, 2, 1]
        [[1, 2, 3, 4, 5], 15, 5],        // Whole array sum

        // No valid subarray
        [[1, 2, 3], 10, 0],              // No subarray with sum 10
    ];
}

}
