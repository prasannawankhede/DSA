<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LeaderInArray;

class LeaderInArrayTest extends TestCase
{
    public function testFindLeaders()
    {
        $obj = new LeaderInArray();

        // Test Case 1: Normal Array
        $arr = [10, 22, 12, 3, 0, 6];
        $this->assertEquals([6, 12, 22], $obj->findLeaders($arr));

        // Test Case 2: Single Element Array
        $arr = [5];
        $this->assertEquals([5], $obj->findLeaders($arr));

        // Test Case 3: All Elements Are the Same
        $arr = [7, 7, 7, 7];
        $this->assertEquals([7], $obj->findLeaders($arr));

        // Test Case 4: Array in Decreasing Order
        $arr = [9, 8, 7, 6];
        $this->assertEquals([6, 7, 8, 9], $obj->findLeaders($arr));

        // Test Case 5: Empty Array
        $arr = [];
        $this->assertEquals([], $obj->findLeaders($arr));
    }
}
