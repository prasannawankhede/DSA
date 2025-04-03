<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\SortArray;

class SortArrayTest extends TestCase
{
    private $sorter;

    protected function setUp(): void
    {
        $this->sorter = new SortArray();
    }

    public function testSortArray()
    {
        $arr = [3, 1, 4, 2];
        $this->sorter->sort($arr);
        $this->assertEquals([1, 2, 3, 4], $arr);
    }

    public function testAlreadySortedArray()
    {
        $arr = [1, 2, 3, 4, 5];
        $this->sorter->sort($arr);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
    }

    public function testReverseSortedArray()
    {
        $arr = [5, 4, 3, 2, 1];
        $this->sorter->sort($arr);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
    }

    public function testArrayWithDuplicates()
    {
        $arr = [4, 2, 4, 1, 3];
        $this->sorter->sort($arr);
        $this->assertEquals([1, 2, 3, 4, 4], $arr);
    }

    public function testSingleElementArray()
    {
        $arr = [7];
        $this->sorter->sort($arr);
        $this->assertEquals([7], $arr);
    }

    public function testEmptyArray()
    {
        $arr = [];
        $this->sorter->sort($arr);
        $this->assertEquals([], $arr);
    }
}
