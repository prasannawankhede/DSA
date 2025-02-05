<?php

use PHPUnit\Framework\TestCase;
use App\PlainTheArray;

class PlainTheArrayTest extends TestCase
{
    public function testFlattenBasicArray()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[10, 20], [30, 40]]);
        $this->assertEquals([10, 20, 30, 40], $result, "Failed to flatten a basic 2x2 array.");
    }

    public function testEmptyArray()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([]);
        $this->assertEquals([], $result, "Failed to handle an empty array.");
    }

    public function testSingleRowArray()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[10, 20, 30]]);
        $this->assertEquals([10, 20, 30], $result, "Failed to flatten a single-row array.");
    }

    public function testSingleColumnArray()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[10], [20], [30]]);
        $this->assertEquals([10, 20, 30], $result, "Failed to flatten a single-column array.");
    }

    public function testNestedEmptyArrays()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[], [], []]);
        $this->assertEquals([], $result, "Failed to handle nested empty arrays.");
    }

    public function testArrayWithMixedLengths()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[10, 20], [30], [40, 50, 60]]);
        $this->assertEquals([10, 20, 30, 40, 50, 60], $result, "Failed to flatten an array with mixed lengths.");
    }

    public function testArrayWithNegativeNumbers()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[10, -20], [-30, 40]]);
        $this->assertEquals([10, -20, -30, 40], $result, "Failed to flatten an array with negative numbers.");
    }

    public function testArrayWithZeroes()
    {
        $obj = new PlainTheArray();
        $result = $obj->do([[0, 20], [30, 0]]);
        $this->assertEquals([0, 20, 30, 0], $result, "Failed to flatten an array with zeroes.");
    }
}
