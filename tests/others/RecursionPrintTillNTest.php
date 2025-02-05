<?php

use PHPUnit\Framework\TestCase;
use App\RecursionPrintTillN;

class RecursionPrintTillNTest extends TestCase {
    public function testDoPrintsNumbersFrom1To5() {
        $this->expectOutputString("1\n2\n3\n4\n5\n");

        $obj = new RecursionPrintTillN();
        $obj->do(1, 5);
    }

    public function testDoWithSameStartAndEnd() {
        $this->expectOutputString("3\n");

        $obj = new RecursionPrintTillN();
        $obj->do(3, 3);
    }

    public function testDoWithStartGreaterThanEnd() {
        $this->expectOutputString("");

        $obj = new RecursionPrintTillN();
        $obj->do(5, 3);
    }
}
