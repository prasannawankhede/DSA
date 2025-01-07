<?php

use PHPUnit\Framework\TestCase;
use App\PyramidPattern;

class PyramidPatternTest extends TestCase {
    public function testPrintPyramidWithFiveRows() {
        $expectedOutput = "    *\n   ***\n  *****\n *******\n*********\n";
        $this->expectOutputString($expectedOutput);

        $obj = new PyramidPattern();
        $obj->printPyramid(5);
    }

    public function testPrintPyramidWithThreeRows() {
        $expectedOutput = "  *\n ***\n*****\n";
        $this->expectOutputString($expectedOutput);

        $obj = new PyramidPattern();
        $obj->printPyramid(3);
    }

    public function testPrintPyramidWithZeroRows() {
        $this->expectOutputString("");

        $obj = new PyramidPattern();
        $obj->printPyramid(0);
    }

    public function testPrintPyramidWithOneRow() {
        $expectedOutput = "*\n";
        $this->expectOutputString($expectedOutput);

        $obj = new PyramidPattern();
        $obj->printPyramid(1);
    }
}
