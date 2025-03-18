<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\MaxSubarraySum;

class MaxSubarraySumTest extends TestCase
{
    private $maxSubarraySum;

    protected function setUp(): void
    {
        $this->maxSubarraySum = new MaxSubarraySum();
    }

    /**
     * @dataProvider maxSubarraySumDataProvider
     */
    public function testFindMaxSubarraySum($arr, $expected)
    {
        $result = $this->maxSubarraySum->findMaxSubarraySum($arr);
        $this->assertEquals($expected, $result);
    }

    public static function maxSubarraySumDataProvider(): array
    {
        return [
            [[-2, 1, -3, 4, -1, 2, 1, -5, 4], 6],     // Maximum subarray [4, -1, 2, 1]
            [[1, 2, 3, 4], 10],                        // Entire array is max subarray
            [[-1, -2, -3, -4], -1],                    // All negative elements
            [[0, 0, 0, 0], 0],                         // All zeros
            [[3, -1, 4, -1, 5], 10]                    // Subarray [3, -1, 4, -1, 5]
        ];
    }
}
