<?php

use PHPUnit\Framework\TestCase;
use App\others\MaxSubarraySumFinder;

class MaxSubarraySumFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new MaxSubarraySumFinder();
    }

    public function testFindMaxSubarraySumWithMixedNumbers()
    {
        $input = [-2,1,-3,4,-1,2,1,-5,4];
        $expected = 6; // Largest sum from subarray [4,-1,2,1]
        $this->assertEquals($expected, $this->finder->findMaxSubarraySum($input));
    }

    public function testFindMaxSubarraySumWithAllPositiveNumbers()
    {
        $input = [1, 2, 3, 4, 5];
        $expected = 15; // Entire array is the max subarray
        $this->assertEquals($expected, $this->finder->findMaxSubarraySum($input));
    }

    public function testFindMaxSubarraySumWithSingleNegativeElement()
    {
        $input = [-5];
        $expected = -5;
        $this->assertEquals($expected, $this->finder->findMaxSubarraySum($input));
    }

    public function testFindMaxSubarraySumWithAllNegativeNumbers()
    {
        $input = [-3, -2, -1, -4];
        $expected = -1; // Maximum single element
        $this->assertEquals($expected, $this->finder->findMaxSubarraySum($input));
    }

    public function testFindMaxSubarraySumWithAllZeros()
    {
        $input = [0, 0, 0, 0];
        $expected = 0;
        $this->assertEquals($expected, $this->finder->findMaxSubarraySum($input));
    }
}
