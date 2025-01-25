<?php

namespace Tests\Unit;

use App\UniqueSquarePattern;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class UniqueSquarePatternTest extends TestCase
{
    /**
     * Test generating a hollow square pattern of size 3.
     */
    public function testGenerateHollowPatternSize3()
    {
        $uniqueSquarePattern = new UniqueSquarePattern();
        $expected = "***\n* *\n***";
        $this->assertEquals($expected, $uniqueSquarePattern->generateHollowPattern(3));
    }

    /**
     * Test generating a hollow square pattern of size 5.
     */
    public function testGenerateHollowPatternSize5()
    {
        $uniqueSquarePattern = new UniqueSquarePattern();
        $expected = "*****\n*   *\n*   *\n*   *\n*****";
        $this->assertEquals($expected, $uniqueSquarePattern->generateHollowPattern(5));
    }

    /**
     * Test generating a hollow square pattern of size 1.
     */
    public function testGenerateHollowPatternSize1()
    {
        $uniqueSquarePattern = new UniqueSquarePattern();
        $expected = "*";
        $this->assertEquals($expected, $uniqueSquarePattern->generateHollowPattern(1));
    }

    /**
     * Test generating a hollow square pattern with invalid size (zero).
     */
    public function testGenerateHollowPatternWithZeroSize()
    {
        $this->expectException(InvalidArgumentException::class);

        $uniqueSquarePattern = new UniqueSquarePattern();
        $uniqueSquarePattern->generateHollowPattern(0);
    }

    /**
     * Test generating a hollow square pattern with invalid size (negative).
     */
    public function testGenerateHollowPatternWithNegativeSize()
    {
        $this->expectException(InvalidArgumentException::class);

        $uniqueSquarePattern = new UniqueSquarePattern();
        $uniqueSquarePattern->generateHollowPattern(-5);
    }
}
