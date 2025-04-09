<?php
namespace Tests\Heap;

use App\Heap\TopKFrequentNumbers;
use PHPUnit\Framework\TestCase;

class TopKFrequentNumbersTest extends TestCase
{
    public function testExample1()
    {
        $solution = new TopKFrequentNumbers();
        $result = $solution->topKFrequent([1, 1, 1, 2, 2, 3], 2);
        $this->assertEquals([1, 2], $result);
    }

    public function testExample2()
    {
        $solution = new TopKFrequentNumbers();
        $result = $solution->topKFrequent([3, 0, 1, 0], 1);
        $this->assertEquals([0], $result);
    }

    public function testWhenAllElementsAreSame()
    {
        $solution = new TopKFrequentNumbers();
        $result = $solution->topKFrequent([7, 7, 7, 7], 1);
        $this->assertEquals([7], $result);
    }

    public function testWhenKEqualsLength()
    {
        $solution = new TopKFrequentNumbers();
        $result = $solution->topKFrequent([4, 4, 6, 6, 8, 8], 3);
        $this->assertEquals([4, 6, 8], $result);
    }
}
