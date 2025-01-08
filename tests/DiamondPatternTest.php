<?php

use PHPUnit\Framework\TestCase;
use App\DiamondPattern;

class DiamondPatternTest extends TestCase {
    public function testPrintDiamondWithFiveRows() {
        $expectedOutput = "    *\n   ***\n  *****\n *******\n*********\n *******\n  *****\n   ***\n    *\n";
        $this->expectOutputString($expectedOutput);

        $obj = new DiamondPattern();
        $obj->printDiamond(5);
    }

    public function testPrintDiamondWithThreeRows() {
        $expectedOutput = "  *\n ***\n*****\n ***\n  *\n";
        $this->expectOutputString($expectedOutput);

        $obj = new DiamondPattern();
        $obj->printDiamond(3);
    }

    public function testPrintDiamondWithOneRow() {
        $expectedOutput = "*\n";
        $this->expectOutputString($expectedOutput);

        $obj = new DiamondPattern();
        $obj->printDiamond(1);
    }

    public function testPrintDiamondWithZeroRows() {
        $this->expectOutputString("");

        $obj = new DiamondPattern();
        $obj->printDiamond(0);
    }
}
