<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\FirstAndLastOccUsingBinary;

class FirstAndLastOccUsingBinaryTest extends TestCase
{
    protected $search;

    protected function setUp(): void
    {
        parent::setUp();
        $this->search = new FirstAndLastOccUsingBinary();
    }

    public function testFirstOccurrence()
    {
        $arr = [1, 2, 2, 2, 3, 4, 5];
        $target = 2;
        $n = count($arr);
        $this->assertEquals(1, $this->search->firstOccurance($arr, $target, $n));
    }

    public function testLastOccurrence()
    {
        $arr = [1, 2, 2, 2, 3, 4, 5];
        $target = 2;
        $n = count($arr);
        $this->assertEquals(3, $this->search->lastOccurance($arr, $target, $n));
    }

    public function testFind()
    {
        $arr = [1, 2, 2, 2, 3, 4, 5];
        $target = 2;
        $this->assertEquals([1, 3], $this->search->find($arr, $target));
    }

    public function testFindTargetNotPresent()
    {
        $arr = [1, 2, 3, 4, 5];
        $target = 6;
        $this->assertEquals([-1, -1], $this->search->find($arr, $target));
    }

    public function testFindSingleElementArray()
    {
        $arr = [5];
        $target = 5;
        $this->assertEquals([0, 0], $this->search->find($arr, $target));
    }

    public function testFindEmptyArray()
    {
        $arr = [];
        $target = 1;
        $this->assertEquals([-1, -1], $this->search->find($arr, $target));
    }
}
