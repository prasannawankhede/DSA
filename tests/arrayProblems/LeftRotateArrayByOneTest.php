<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LeftRotateArrayByOne;

class LeftRotateArrayByOneTest extends TestCase
{
    public function testRotate()
    {
        $obj = new LeftRotateArrayByOne();

        // Test Case 1: Normal Array
        $arr = [1, 2, 3, 4, 5];
        $obj->rotate($arr, count($arr));
        $this->assertEquals([2, 3, 4, 5, 1], $arr);

        // Test Case 2: Array with one element (should remain the same)
        $arr = [10];
        $obj->rotate($arr, count($arr));
        $this->assertEquals([10], $arr);

        // Test Case 3: Array with duplicate elements
        $arr = [3, 3, 3, 3];
        $obj->rotate($arr, count($arr));
        $this->assertEquals([3, 3, 3, 3], $arr);

        // Test Case 4: Already rotated array
        $arr = [5, 1, 2, 3, 4];
        $obj->rotate($arr, count($arr));
        $this->assertEquals([1, 2, 3, 4, 5], $arr);

        // Test Case 5: Empty Array (should remain empty)
        $arr = [];
        $obj->rotate($arr, count($arr));
        $this->assertEquals([], $arr);
    }
}
