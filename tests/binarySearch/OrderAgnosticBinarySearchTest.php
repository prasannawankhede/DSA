<?php
namespace Tests\BinarySearch;

use App\BinarySearch\OrderAgnosticBinarySearch;
use PHPUnit\Framework\TestCase;

class OrderAgnosticBinarySearchTest extends TestCase
{
    private OrderAgnosticBinarySearch $searcher;

    protected function setUp(): void
    {
        $this->searcher = new OrderAgnosticBinarySearch();
    }

    public function testSearchInAscendingArray()
    {
        $arr = [1, 3, 5, 7, 9];
        $this->assertSame(2, $this->searcher->search($arr, 5));
    }

    public function testSearchInDescendingArray()
    {
        $arr = [9, 7, 5, 3, 1];
        $this->assertSame(2, $this->searcher->search($arr, 5));
    }

    public function testElementNotFound()
    {
        $this->assertSame(-1, $this->searcher->search([2, 4, 6], 3));
    }

    public function testEmptyArray()
    {
        $this->assertSame(-1, $this->searcher->search([], 1));
    }

    public function testSingleElementFound()
    {
        $this->assertSame(0, $this->searcher->search([7], 7));
    }

    public function testSingleElementNotFound()
    {
        $this->assertSame(-1, $this->searcher->search([7], 3));
    }
}
