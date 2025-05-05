<?php
use App\SlidingWindow\MaxSumSubarray;
use PHPUnit\Framework\TestCase;

class MaxSumSubarrayTest extends TestCase
{
    public function testMaxSum()
    {
        $maxSumSubarray = new MaxSumSubarray();

        $this->assertEquals(9, $maxSumSubarray->maxSum([1, 2, 3, 4, 5], 2));
        $this->assertEquals(9, $maxSumSubarray->maxSum([2, 1, 5, 1, 3, 2], 3));
        $this->assertEquals(7, $maxSumSubarray->maxSum([2, 3, 4, 1, 5], 2));
        $this->assertEquals(0, $maxSumSubarray->maxSum([], 3));
        $this->assertEquals(0, $maxSumSubarray->maxSum([1, 2], 3));
    }
}
