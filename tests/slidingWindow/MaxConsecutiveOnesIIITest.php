<?php
namespace Tests\SlidingWindow;

use App\SlidingWindow\MaxConsecutiveOnesIII;
use PHPUnit\Framework\TestCase;

class MaxConsecutiveOnesIIITest extends TestCase
{
    public function testWithBasicExample()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(6, $obj->find([1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0], 2));
    }

    public function testWithAnotherExample()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(10, $obj->find([0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1], 3));
    }

    public function testWithAllOnes()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(5, $obj->find([1, 1, 1, 1, 1], 1));
    }

    public function testWithAllZeros()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(3, $obj->find([0, 0, 0, 0, 0], 3));
    }

    public function testWithNoFlipsAllowed()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(2, $obj->find([1, 0, 1, 1, 0, 1], 0));
    }

    public function testWithEmptyArray()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(0, $obj->find([], 2));
    }

    public function testWithKGreaterThanZeros()
    {
        $obj = new MaxConsecutiveOnesIII();
        $this->assertEquals(7, $obj->find([1, 0, 1, 0, 1, 0, 1], 10));
    }
}
