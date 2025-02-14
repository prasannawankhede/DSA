<?php

namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\MaximumSubarray;

class MaximumSubarrayTest extends TestCase
{
    /**
     * Test Example 1:
     * Input: [-2, 1, -3, 4, -1, 2, 1, -5, 4]
     * Expected Output: 6 
     * Explanation: The subarray [4, -1, 2, 1] has sum 6.
     */
    public function testExample1(): void
    {
        $obj = new MaximumSubarray();
        $nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
        $this->assertEquals(6, $obj->max($nums));
    }

    /**
     * Test Example 2:
     * Input: [1]
     * Expected Output: 1
     */
    public function testExample2(): void
    {
        $obj = new MaximumSubarray();
        $nums = [1];
        $this->assertEquals(1, $obj->max($nums));
    }

    /**
     * Test Example 3:
     * Input: [5, 4, -1, 7, 8]
     * Expected Output: 23 
     * Explanation: The subarray [5,4,-1,7,8] sums to 23.
     */
    public function testExample3(): void
    {
        $obj = new MaximumSubarray();
        $nums = [5, 4, -1, 7, 8];
        $this->assertEquals(23, $obj->max($nums));
    }

    /**
     * Test with all negative numbers.
     * Input: [-3, -4, -1, -2]
     * Expected Output: -1 
     * Explanation: The maximum subarray sum in an all-negative array is the largest element.
     */
    public function testAllNegative(): void
    {
        $obj = new MaximumSubarray();
        $nums = [-3, -4, -1, -2];
        $this->assertEquals(-1, $obj->max($nums));
    }

    /**
     * Test with mixed values.
     * Input: [2, -1, 2, 3, -4, 2]
     * Expected Output: 6 
     * Explanation: One valid maximum subarray is [2, -1, 2, 3] with sum = 6.
     */
    public function testMixedValues(): void
    {
        $obj = new MaximumSubarray();
        $nums = [2, -1, 2, 3, -4, 2];
        $this->assertEquals(6, $obj->max($nums));
    }
}
