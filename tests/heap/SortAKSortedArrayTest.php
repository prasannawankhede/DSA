<?php
namespace Tests\Heap;

use App\Heap\SortAKSortedArray;
use PHPUnit\Framework\TestCase;

class SortAKSortedArrayTest extends TestCase
{
    public function testExample1()
    {
        $sorter = new SortAKSortedArray();
        $result = $sorter->sort([6, 5, 3, 2, 8, 10, 9], 3);

        $this->assertEquals([2, 3, 5, 6, 8, 9, 10], $result);
    }

    public function testExample2()
    {
        $sorter = new SortAKSortedArray();
        $result = $sorter->sort([4, 3, 2, 1], 2);

        $this->assertEquals([1, 2, 3, 4], $result);
    }

    public function testAlreadySorted()
    {
        $sorter = new SortAKSortedArray();
        $result = $sorter->sort([1, 2, 3, 4, 5], 1);

        $this->assertEquals([1, 2, 3, 4, 5], $result);
    }
}
