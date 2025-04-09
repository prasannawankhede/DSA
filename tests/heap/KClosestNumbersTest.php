<?php
namespace Tests\Heap;

use App\Heap\KClosestNumbers;
use PHPUnit\Framework\TestCase;

class KClosestNumbersTest extends TestCase
{
    public function testExample1()
    {
        $finder = new KClosestNumbers();
        $result = $finder->findClosest([1, 2, 3, 4, 5], 2, 3);
        sort($result); // to ensure consistent comparison
        $this->assertContains($result, [[2, 3], [3, 4]]);
    }

    public function testExample2()
    {
        $finder = new KClosestNumbers();
        $result = $finder->findClosest([10, 15, 7, 3], 2, 8);
        sort($result);
        $this->assertEquals([7, 10], $result);
    }

    public function testExample3()
    {
        $finder = new KClosestNumbers();
        $result = $finder->findClosest([5, 6, 7, 8, 9], 3, 7);
        sort($result);
        $this->assertEquals([6, 7, 8], $result);
    }

    public function testWhenKIsLargerThanArray()
    {
        $finder = new KClosestNumbers();
        $result = $finder->findClosest([1, 3, 5], 5, 4);
        sort($result);
        $this->assertEquals([1, 3, 5], $result); // return all since k > size
    }
}
