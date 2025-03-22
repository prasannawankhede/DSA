<?php
use PHPUnit\Framework\TestCase;
use App\Algorithms\BubbleSortAlgorithm;

class BubbleSortAlgorithmTest extends TestCase
{
    private BubbleSortAlgorithm $bubbleSort;

    protected function setUp(): void
    {
        $this->bubbleSort = new BubbleSortAlgorithm();
    }

    public function testSortWithUnsortedArray()
    {
        $arr = [13, 46, 24, 52, 20, 9];
        $expected = [9, 13, 20, 24, 46, 52];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }

    public function testSortWithAlreadySortedArray()
    {
        $arr = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }

    public function testSortWithReverseSortedArray()
    {
        $arr = [5, 4, 3, 2, 1];
        $expected = [1, 2, 3, 4, 5];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }

    public function testSortWithDuplicateElements()
    {
        $arr = [4, 2, 2, 8, 3, 3, 1];
        $expected = [1, 2, 2, 3, 3, 4, 8];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }

    public function testSortWithSingleElementArray()
    {
        $arr = [42];
        $expected = [42];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }

    public function testSortWithEmptyArray()
    {
        $arr = [];
        $expected = [];

        $this->assertSame($expected, $this->bubbleSort->sort($arr));
    }
}
