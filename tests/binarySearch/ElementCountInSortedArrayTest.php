<?php
namespace Tests\BinarySearch;

use App\BinarySearch\ElementCountInSortedArray;
use PHPUnit\Framework\TestCase;

class ElementCountInSortedArrayTest extends TestCase
{
    private ElementCountInSortedArray $counter;

    protected function setUp(): void
    {
        $this->counter = new ElementCountInSortedArray();
    }

    public function testMultipleOccurrences()
    {
        $arr = [1, 2, 2, 2, 3, 4];
        $this->assertSame(3, $this->counter->count($arr, 2));
    }

    public function testSingleOccurrence()
    {
        $arr = [1, 2, 3, 4];
        $this->assertSame(1, $this->counter->count($arr, 3));
    }

    public function testElementNotFound()
    {
        $arr = [1, 2, 3, 4];
        $this->assertSame(0, $this->counter->count($arr, 5));
    }

    public function testAllSameElements()
    {
        $arr = [7, 7, 7, 7, 7];
        $this->assertSame(5, $this->counter->count($arr, 7));
    }

    public function testFirstElement()
    {
        $arr = [1, 1, 2, 3, 4];
        $this->assertSame(2, $this->counter->count($arr, 1));
    }

    public function testLastElement()
    {
        $arr = [1, 2, 3, 4, 5, 5];
        $this->assertSame(2, $this->counter->count($arr, 5));
    }

    public function testEmptyArray()
    {
        $this->assertSame(0, $this->counter->count([], 3));
    }
}
