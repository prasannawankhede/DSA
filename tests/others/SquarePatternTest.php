<?php

namespace Tests\Unit;

use App\SquarePattern;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SquarePatternTest extends TestCase
{
    /**
     * Test generating a square pattern of size 1.
     */
    public function testGeneratePatternSize1()
    {
        $squarePattern = new SquarePattern();
        $expected = "*";
        $this->assertEquals($expected, $squarePattern->generatePattern(1));
    }

    /**
     * Test generating a square pattern of size 2.
     */
    public function testGeneratePatternSize2()
    {
        $squarePattern = new SquarePattern();
        $expected = "**\n**";
        $this->assertEquals($expected, $squarePattern->generatePattern(2));
    }

    /**
     * Test generating a square pattern of size 3.
     */
    public function testGeneratePatternSize3()
    {
        $squarePattern = new SquarePattern();
        $expected = "***\n***\n***";
        $this->assertEquals($expected, $squarePattern->generatePattern(3));
    }

    /**
     * Test generating a square pattern with invalid size (zero).
     */
    public function testGeneratePatternWithZeroSize()
    {
        $this->expectException(InvalidArgumentException::class);

        $squarePattern = new SquarePattern();
        $squarePattern->generatePattern(0);
    }

    /**
     * Test generating a square pattern with invalid size (negative).
     */
    public function testGeneratePatternWithNegativeSize()
    {
        $this->expectException(InvalidArgumentException::class);

        $squarePattern = new SquarePattern();
        $squarePattern->generatePattern(-5);
    }
}
