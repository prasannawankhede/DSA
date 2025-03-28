<?php
namespace Tests\Stacks;

use App\Stacks\SubArrayMiniumSum;
use PHPUnit\Framework\TestCase;

class SubArrayMiniumSumTest extends TestCase
{
    public function testSumSubarrayMins()
    {
        $solution = new SubArrayMiniumSum();

        // Test Case 1: Mixed values
        $this->assertEquals(17, $solution->sumSubarrayMins([3, 1, 2, 4]));
        // Subarrays and mins:
        // [3]=3, [3,1]=1, [1]=1, [3,1,2]=1, [1,2]=1, [2]=2, [3,1,2,4]=1, [1,2,4]=1, [2,4]=2, [4]=4
        // Sum: 3+1+1+1+1+2+1+1+2+4 = 17

        // Test Case 2: Decreasing then small value
        $this->assertEquals(444, $solution->sumSubarrayMins([11, 81, 94, 43, 3]));
        // This is a known test case from Leetcode problem #907

        // Test Case 3: Single element
        $this->assertEquals(1, $solution->sumSubarrayMins([1]));
        // Only subarray: [1]=1 → Sum: 1

        // Test Case 4: All elements equal
        $this->assertEquals(20, $solution->sumSubarrayMins([2, 2, 2, 2])); 
        // Subarrays: 4 of length 1, 3 of length 2, 2 of length 3, 1 of length 4
        // All mins are 2 → Sum: 4*2 + 3*2 + 2*2 + 1*2 = 8+6+4+2 = 20

        // Test Case 5: Strictly decreasing
        $this->assertEquals(35, $solution->sumSubarrayMins([5, 4, 3, 2, 1]));
        // Subarray mins:
        // Length 1: 5+4+3+2+1 = 15
        // Length 2: 4+3+2+1 = 10
        // Length 3: 3+2+1 = 6
        // Length 4: 2+1 = 3
        // Length 5: 1 = 1
        // Sum: 15+10+6+3+1 = 35
    }
}