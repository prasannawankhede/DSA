<?php

namespace Tests\Heap;

use PHPUnit\Framework\TestCase;
use App\Heap\KthSmallestElement;

class KthSmallestElementTest extends TestCase
{
    public function testExample1()
    {
        $finder = new KthSmallestElement();
        $result = $finder->findKthSmallest([7, 10, 4, 3, 20, 15], 3);
        $this->assertEquals(7, $result);
    }

    public function testExample2()
    {
        $finder = new KthSmallestElement();
        $result = $finder->findKthSmallest([1, 2, 3, 4, 5], 2);
        $this->assertEquals(2, $result);
    }

    public function testSingleElement()
    {
        $finder = new KthSmallestElement();
        $result = $finder->findKthSmallest([42], 1);
        $this->assertEquals(42, $result);
    }
}
