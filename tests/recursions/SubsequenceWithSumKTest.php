<?php

use App\Recursions\SubsequenceWithSumK;
use PHPUnit\Framework\TestCase;

class SubsequenceWithSumKTest extends TestCase
{
    public function testMultipleValidSubsets()
    {
        $solver = new SubsequenceWithSumK();
        $arr = [4, 3, 5, 2];
        $k = 7;

        $result = $solver->sumK($arr, $k);

        // There are multiple possible valid subsets, like [4,3], [5,2]
        $this->assertContains([4, 3], $result);
        $this->assertContains([5, 2], $result);
        $this->assertNotEmpty($result);
    }

    public function testSingleElementSubset()
    {
        $solver = new SubsequenceWithSumK();
        $arr = [1, 2, 3];
        $k = 3;

        $result = $solver->sumK($arr, $k);
        $this->assertContains([3], $result);
    }

    public function testNoSubsetExists()
    {
        $solver = new SubsequenceWithSumK();
        $arr = [1, 2];
        $k = 10;

        $result = $solver->sumK($arr, $k);
        $this->assertEmpty($result);
    }
}
