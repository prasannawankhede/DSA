<?php
namespace Tests\SlidingWindow;

use App\SlidingWindow\FruitIntoBaskets;
use PHPUnit\Framework\TestCase;

class FruitIntoBasketsTest extends TestCase
{
    public function testSimpleCase()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(3, $obj->totalFruit([1, 2, 1]));
    }

    public function testWithTwoTypes()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(3, $obj->totalFruit([0, 1, 2, 2]));
    }

    public function testWithSwitchingTypes()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(4, $obj->totalFruit([1, 2, 3, 2, 2]));
    }

    public function testWithComplexPattern()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(5, $obj->totalFruit([3, 3, 3, 1, 2, 1, 1, 2, 3, 3, 4]));
    }

    public function testAllSameFruits()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(6, $obj->totalFruit([5, 5, 5, 5, 5, 5]));
    }

    public function testEmptyInput()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(0, $obj->totalFruit([]));
    }

    public function testSingleElement()
    {
        $obj = new FruitIntoBaskets();
        $this->assertEquals(1, $obj->totalFruit([9]));
    }
}
