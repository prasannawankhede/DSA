<?php
namespace Tests\BinarySearch;

use App\BinarySearch\FirstAndLastOccurrence;
use PHPUnit\Framework\TestCase;

class FirstAndLastOccurrenceTest extends TestCase
{
    private FirstAndLastOccurrence $finder;

    protected function setUp(): void
    {
        $this->finder = new FirstAndLastOccurrence();
    }

    public function testMultipleOccurrences()
    {
        $arr = [1, 2, 2, 2, 3, 4];
        $this->assertSame([1, 3], $this->finder->search($arr, 2));
    }

    public function testSingleOccurrence()
    {
        $arr = [1, 2, 3, 4, 5];
        $this->assertSame([2, 2], $this->finder->search($arr, 3));
    }

    public function testElementNotFound()
    {
        $arr = [1, 2, 3, 4, 5];
        $this->assertSame([-1, -1], $this->finder->search($arr, 6));
    }

    public function testFirstElement()
    {
        $arr = [5, 5, 6, 7, 8];
        $this->assertSame([0, 1], $this->finder->search($arr, 5));
    }

    public function testLastElement()
    {
        $arr = [1, 2, 3, 9, 9];
        $this->assertSame([3, 4], $this->finder->search($arr, 9));
    }

    public function testAllSameElements()
    {
        $arr = [7, 7, 7, 7];
        $this->assertSame([0, 3], $this->finder->search($arr, 7));
    }

    public function testEmptyArray()
    {
        $this->assertSame([-1, -1], $this->finder->search([], 3));
    }
}
