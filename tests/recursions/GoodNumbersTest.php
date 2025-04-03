<?php

use App\Recursions\GoodNumbers;
use PHPUnit\Framework\TestCase;

class GoodNumbersTest extends TestCase
{
    private $goodNumbers;

    protected function setUp(): void
    {
        $this->goodNumbers = new GoodNumbers();
    }

    public function testCountGoodNum()
    {
        $this->assertEquals(5, $this->goodNumbers->countGoodNum(1));
        $this->assertEquals(400, $this->goodNumbers->countGoodNum(4));
        $this->assertEquals(564908303, $this->goodNumbers->countGoodNum(50));
    }

    public function testLargeInput()
    {
        $this->assertIsInt($this->goodNumbers->countGoodNum(10 ** 15)); // Ensure it runs efficiently
    }
}
