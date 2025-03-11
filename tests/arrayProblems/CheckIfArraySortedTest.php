<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\CheckIfArraySorted;

class CheckIfArraySortedTest extends TestCase
{
    private CheckIfArraySorted $obj;

    protected function setUp(): void
    {
        $this->obj = new CheckIfArraySorted();
    }

    public function testSortedArray()
    {
        $this->assertTrue($this->obj->check([1, 2, 3, 4, 5]));
    }

    public function testUnsortedArray()
    {
        $this->assertFalse($this->obj->check([2, 1, 3, 4, 5]));
    }

    public function testSortedArrayWithDuplicates()
    {
        $this->assertTrue($this->obj->check([1, 2, 2, 3, 4, 5]));
    }

    public function testUnsortedArrayWithDuplicates()
    {
        $this->assertFalse($this->obj->check([1, 3, 2, 2, 4, 5]));
    }

    public function testEmptyArray()
    {
        $this->assertTrue($this->obj->check([])); // An empty array is considered sorted
    }

    public function testSingleElementArray()
    {
        $this->assertTrue($this->obj->check([10])); // A single element is always sorted
    }

    public function testDescendingArray()
    {
        $this->assertFalse($this->obj->check([5, 4, 3, 2, 1]));
    }

    public function testLargeSortedArray()
    {
        $this->assertTrue($this->obj->check(range(1, 1000))); // Large sorted array
    }

    public function testLargeUnsortedArray()
    {
        $arr = range(1, 1000);
        shuffle($arr); // Shuffle to make it unsorted
        $this->assertFalse($this->obj->check($arr));
    }
}
