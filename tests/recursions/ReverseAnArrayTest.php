<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\ReverseAnArray;

class ReverseAnArrayTest extends TestCase
{
    public function testReverseArray()
    {
        $obj = new ReverseAnArray();

        $arr = [1, 2, 3, 4, 5];
        $obj->rev($arr, 0, count($arr));

        $this->assertEquals([5, 4, 3, 2, 1], $arr);
    }

    public function testReverseEvenSizedArray()
    {
        $obj = new ReverseAnArray();

        $arr = [10, 20, 30, 40];
        $obj->rev($arr, 0, count($arr));

        $this->assertEquals([40, 30, 20, 10], $arr);
    }

    public function testReverseEmptyArray()
    {
        $obj = new ReverseAnArray();

        $arr = [];
        $obj->rev($arr, 0, count($arr));

        $this->assertEquals([], $arr);
    }

    public function testReverseSingleElement()
    {
        $obj = new ReverseAnArray();

        $arr = [7];
        $obj->rev($arr, 0, count($arr));

        $this->assertEquals([7], $arr);
    }

    public function testReverseAlreadyReversedArray()
    {
        $obj = new ReverseAnArray();

        $arr = [9, 8, 7, 6, 5];
        $obj->rev($arr, 0, count($arr));

        $this->assertEquals([5, 6, 7, 8, 9], $arr);
    }
}
