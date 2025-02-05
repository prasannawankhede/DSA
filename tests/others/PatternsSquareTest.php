<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PatternsSquare;

class PatternsSquareTest extends TestCase
{
    public function testSquareOfSize1()
    {
        $pattern = new PatternsSquare();
        ob_start();
        $pattern->print(1);
        $output = ob_get_clean();
        $this->assertEquals("*\n", $output, "Failed to print a 1x1 square.");
    }

    public function testSquareOfSize2()
    {
        $pattern = new PatternsSquare();
        ob_start();
        $pattern->print(2);
        $output = ob_get_clean();
        $expectedOutput = "**\n**\n";
        $this->assertEquals($expectedOutput, $output, "Failed to print a 2x2 square.");
    }

    public function testSquareOfSize4()
    {
        $pattern = new PatternsSquare();
        ob_start();
        $pattern->print(4);
        $output = ob_get_clean();
        $expectedOutput = "****\n****\n****\n****\n";
        $this->assertEquals($expectedOutput, $output, "Failed to print a 4x4 square.");
    }

    public function testSizeZero()
    {
        $pattern = new PatternsSquare();
        ob_start();
        $pattern->print(0);
        $output = ob_get_clean();
        $this->assertEquals("", $output, "Should print nothing for size 0.");
    }

    // public function testNegativeSize()
    // {
    //     $this->expectException(\InvalidArgumentException::class);
    //     $this->expectExceptionMessage("Size must be a positive integer.");

    //     $pattern = new PatternsSquare();
    //     $pattern->print(-1);
    // }
}
