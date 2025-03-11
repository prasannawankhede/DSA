<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LargestElementArray;

class LargestElementArrayTest extends TestCase
{
    public function testMax()
    {
        $obj = new LargestElementArray();

        $result = $obj->find([1, 2, 3, 4, 10]);

        $this->assertEquals(10, $result);
    }

    public function testNegativeNumbers()
    {
        $obj = new LargestElementArray();

        $result = $obj->find([-5, -1, -10, -3]);

        $this->assertEquals(-1, $result);
    }

    public function testMixedNumbers()
    {
        $obj = new LargestElementArray();

        $result = $obj->find([-5, 0, 10, 3, 7]);

        $this->assertEquals(10, $result);
    }

    public function testSingleElement()
    {
        $obj = new LargestElementArray();

        $result = $obj->find([5]);

        $this->assertEquals(5, $result);
    }

    public function testEmptyArray()
    {
        $obj = new LargestElementArray();

        $result = $obj->find([]);

        $this->assertNull($result);
    }
}
