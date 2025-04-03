<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\SortStack;

class SortStackTest extends TestCase
{
    public function testSortAscendingOrder()
    {
        $stack = [3, 1, 4, 2];
        $expected = [1, 2, 3, 4];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }

    public function testSortDescendingOrder()
    {
        $stack = [5, 4, 3, 2, 1];
        $expected = [1, 2, 3, 4, 5];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }

    public function testSortAlreadySorted()
    {
        $stack = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }

    public function testSortWithDuplicates()
    {
        $stack = [4, 1, 3, 1, 2];
        $expected = [1, 1, 2, 3, 4];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }

    public function testSortSingleElement()
    {
        $stack = [42];
        $expected = [42];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }

    public function testSortEmptyStack()
    {
        $stack = [];
        $expected = [];

        $sorter = new SortStack();
        $sorter->sort($stack);

        $this->assertSame($expected, $stack);
    }
}
