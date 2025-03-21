<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\OccuranceOfNumArrBinary;

class OccuranceOfNumArrBinaryTest extends TestCase
{
    public function testCountOccurrences()
    {
        $search = new OccuranceOfNumArrBinary();

        // Test case 1: Target exists multiple times
        $arr = [2, 4, 6, 8, 8, 8, 11, 13];
        $this->assertEquals(3, $search->count($arr, 8));

        // Test case 2: Target exists once
        $arr = [1, 2, 3, 4, 5];
        $this->assertEquals(1, $search->count($arr, 3));

        // Test case 3: Target does not exist
        $arr = [1, 2, 3, 4, 5];
        $this->assertEquals(0, $search->count($arr, 10));

        // Test case 4: Target is the only element
        $arr = [7, 7, 7, 7, 7];
        $this->assertEquals(5, $search->count($arr, 7));

        // Test case 5: Empty array
        $arr = [];
        $this->assertEquals(0, $search->count($arr, 3));

        // Test case 6: Target at the start
        $arr = [3, 3, 4, 5, 6];
        $this->assertEquals(2, $search->count($arr, 3));

        // Test case 7: Target at the end
        $arr = [1, 2, 3, 3, 3];
        $this->assertEquals(3, $search->count($arr, 3));
    }
}
