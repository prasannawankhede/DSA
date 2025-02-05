<?php

use PHPUnit\Framework\TestCase;
use App\MaxProductFinder;

class MaxProductFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new MaxProductFinder();
    }

    public function testMaxProductWithPositiveNumbers()
    {
        $input = [1, 2, 3, 4];
        $expected = 12; // 3 * 4 = 12
        $result = $this->finder->maxProduct($input);

        $this->assertEquals($expected, $result);
    }

    public function testMaxProductWithNegativeNumbers()
    {
        $input = [-10, -10, 5, 2];
        $expected = 100; // -10 * -10 = 100
        $result = $this->finder->maxProduct($input);

        $this->assertEquals($expected, $result);
    }

    public function testMaxProductWithOnlyTwoElements()
    {
        $input = [1, 2];
        $expected = 2; // 1 * 2 = 2
        $result = $this->finder->maxProduct($input);

        $this->assertEquals($expected, $result);
    }

    public function testMaxProductWithOnlyOneElement()
    {
        $input = [3];
        $expected = 0; // Not enough elements, returns 0
        $result = $this->finder->maxProduct($input);

        $this->assertEquals($expected, $result);
    }

    public function testMaxProductWithMixedNumbers()
    {
        $input = [1, 5];
        $expected = 5; // 1 * 5 = 5
        $result = $this->finder->maxProduct($input);

        $this->assertEquals($expected, $result);
    }
}
