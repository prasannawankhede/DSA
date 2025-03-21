<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SearchRotatedSortedArrayI;

class SearchRotatedSortedArrayITest extends TestCase
{
    private SearchRotatedSortedArrayI $search;

    protected function setUp(): void
    {
        $this->search = new SearchRotatedSortedArrayI();
    }

    public function testFindElementExists()
    {
        $arr = [4, 5, 6, 7, 0, 1, 2];
        $this->assertEquals(4, $this->search->find($arr, 0));
        $this->assertEquals(2, $this->search->find($arr, 6));
        $this->assertEquals(0, $this->search->find($arr, 4));
    }

    public function testFindElementNotExists()
    {
        $arr = [4, 5, 6, 7, 0, 1, 2];
        $this->assertEquals(-1, $this->search->find($arr, 3));
        $this->assertEquals(-1, $this->search->find($arr, 8));
    }

    public function testFindInSingleElementArray()
    {
        $arr = [1];
        $this->assertEquals(0, $this->search->find($arr, 1));
        $this->assertEquals(-1, $this->search->find($arr, 2));
    }

    public function testFindInEmptyArray()
    {
        $arr = [];
        $this->assertEquals(-1, $this->search->find($arr, 5));
    }

    public function testFindElementInRotatedArray()
    {
        $arr = [6, 7, 8, 1, 2, 3, 4, 5];
        $this->assertEquals(3, $this->search->find($arr, 1));
        $this->assertEquals(6, $this->search->find($arr, 4));
        $this->assertEquals(-1, $this->search->find($arr, 10));
    }
}
