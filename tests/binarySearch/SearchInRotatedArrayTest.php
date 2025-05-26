<?php
namespace Tests\BinarySearch;

use App\BinarySearch\SearchInRotatedArray;
use PHPUnit\Framework\TestCase;

class SearchInRotatedArrayTest extends TestCase
{
    private SearchInRotatedArray $searcher;

    protected function setUp(): void
    {
        $this->searcher = new SearchInRotatedArray();
    }

    public function testElementPresentInLeftHalf(): void
    {
        $arr = [4, 5, 6, 7, 0, 1, 2];
        $this->assertSame(1, $this->searcher->search($arr, 5));
    }

    public function testElementPresentInRightHalf(): void
    {
        $arr = [4, 5, 6, 7, 0, 1, 2];
        $this->assertSame(4, $this->searcher->search($arr, 0));
    }

    public function testElementIsPivot(): void
    {
        $arr = [6, 7, 1, 2, 3, 4, 5];
        $this->assertSame(2, $this->searcher->search($arr, 1));
    }

    public function testElementAtStart(): void
    {
        $arr = [6, 7, 1, 2, 3, 4, 5];
        $this->assertSame(0, $this->searcher->search($arr, 6));
    }

    public function testElementAtEnd(): void
    {
        $arr = [6, 7, 1, 2, 3, 4, 5];
        $this->assertSame(6, $this->searcher->search($arr, 5));
    }

    public function testElementNotPresent(): void
    {
        $arr = [4, 5, 6, 7, 0, 1, 2];
        $this->assertSame(-1, $this->searcher->search($arr, 10));
    }

    public function testSingleElementFound(): void
    {
        $arr = [3];
        $this->assertSame(0, $this->searcher->search($arr, 3));
    }

    public function testSingleElementNotFound(): void
    {
        $arr = [3];
        $this->assertSame(-1, $this->searcher->search($arr, 1));
    }

    public function testEmptyArray(): void
    {
        $arr = [];
        $this->assertSame(-1, $this->searcher->search($arr, 1));
    }
}
