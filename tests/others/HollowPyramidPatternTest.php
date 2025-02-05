<?php

namespace Tests\Unit;

use App\HollowPyramidPattern;
use PHPUnit\Framework\TestCase;

class HollowPyramidPatternTest extends TestCase
{
    /**
     * Test generating a hollow pyramid pattern of size 5.
     */
    public function testGeneratePatternSize5()
    {
        $hollowPyramidPattern = new HollowPyramidPattern();
        $expected = "    *\n   * *\n  *   *\n *     *\n*********";
        $this->assertEquals($expected, $hollowPyramidPattern->generatePattern(5));
    }

    /**
     * Test generating a hollow pyramid pattern of size 3.
     */
    public function testGeneratePatternSize3()
    {
        $hollowPyramidPattern = new HollowPyramidPattern();
        $expected = "  *\n * *\n*****";
        $this->assertEquals($expected, $hollowPyramidPattern->generatePattern(3));
    }

    /**
     * Test generating a hollow pyramid pattern of size 1.
     */
    public function testGeneratePatternSize1()
    {
        $hollowPyramidPattern = new HollowPyramidPattern();
        $expected = "*";
        $this->assertEquals($expected, $hollowPyramidPattern->generatePattern(1));
    }

    /**
     * Test generating a hollow pyramid pattern with invalid size (zero).
     */
    public function testGeneratePatternWithZeroSize()
    {
        $this->expectException(\InvalidArgumentException::class);

        $hollowPyramidPattern = new HollowPyramidPattern();
        $hollowPyramidPattern->generatePattern(0);
    }

    /**
     * Test generating a hollow pyramid pattern with invalid size (negative).
     */
    public function testGeneratePatternWithNegativeSize()
    {
        $this->expectException(\InvalidArgumentException::class);

        $hollowPyramidPattern = new HollowPyramidPattern();
        $hollowPyramidPattern->generatePattern(-3);
    }
}
