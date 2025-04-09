<?php
namespace Tests\Heap;

use App\Heap\ReturnKLargestElementsArray;
use PHPUnit\Framework\TestCase;

class ReturnKLargestElementsArrayTest extends TestCase
{
    public function testExample1()
    {
        $finder = new ReturnKLargestElementsArray();
        $result = $finder->findKElements([3, 2, 1, 5, 6, 4], 2);

        // Sort result because heap may not return in order
        sort($result);

        $this->assertEquals([5, 6], $result);
    }

    public function testExample2()
    {
        $finder = new ReturnKLargestElementsArray();
        $result = $finder->findKElements([10, 100, 5, 70, 1], 3);

        sort($result);
        $this->assertEquals([10, 70, 100], $result);

    }

    public function testExample3()
    {
        $finder = new ReturnKLargestElementsArray();
        $result = $finder->findKElements([1, 2, 3], 5);

        sort($result);

        $this->assertEquals([1, 2, 3], $result); // less elements than k
    }
}
