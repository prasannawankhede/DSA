<?php
use App\SlidingWindow\MinSumSubarray;
use PHPUnit\Framework\TestCase;

class MinSumSubarrayTest extends TestCase
{
    public function testMinSum()
    {
        $minSumSubarray = new MinSumSubarray();

        $this->assertEquals(3, $minSumSubarray->minSum([1, 2, 3, 4, 5], 2));    // 1+2
        $this->assertEquals(7, $minSumSubarray->minSum([2, 1, 5, 1, 3, 2], 3)); // 1+3+2
        $this->assertEquals(5, $minSumSubarray->minSum([2, 3, 4, 1, 5], 2));    // 4+1
        $this->assertEquals(0, $minSumSubarray->minSum([], 3));                 // empty array
        $this->assertEquals(0, $minSumSubarray->minSum([1, 2], 3));             // window size too big
    }
}
