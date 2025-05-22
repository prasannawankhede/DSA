<?php
namespace Tests\BinarySearch;

use App\BinarySearch\DescendingSortedArray;
use PHPUnit\Framework\TestCase;

class DescendingSortedArrayTest extends TestCase
{
    private DescendingSortedArray $searcher;

    protected function setUp(): void
    {
        $this->searcher = new DescendingSortedArray();
    }

    public function testFindExistingElement()
    {
        $arr = [100, 80, 60, 40, 20, 10];
        $this->assertSame(2, $this->searcher->search($arr, 60));
    }

    public function testFindFirstElement()
    {
        $arr = [50, 40, 30, 20, 10];
        $this->assertSame(0, $this->searcher->search($arr, 50));
    }

    public function testFindLastElement()
    {
        $arr = [90, 70, 60, 40, 30];
        $this->assertSame(4, $this->searcher->search($arr, 30));
    }

    public function testElementNotFound()
    {
        $arr = [20, 18, 16, 14, 12];
        $this->assertSame(-1, $this->searcher->search($arr, 19));
    }

    public function testEmptyArray()
    {
        $this->assertSame(-1, $this->searcher->search([], 10));
    }

    public function testSingleElementFound()
    {
        $this->assertSame(0, $this->searcher->search([5], 5));
    }

    public function testSingleElementNotFound()
    {
        $this->assertSame(-1, $this->searcher->search([5], 1));
    }
}
