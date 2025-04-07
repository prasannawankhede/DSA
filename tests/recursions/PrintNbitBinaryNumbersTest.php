<?php

use App\Recursions\PrintNbitBinaryNumbers;
use PHPUnit\Framework\TestCase;

class PrintNbitBinaryNumbersTest extends TestCase
{
    public function testNEqualsOne()
    {
        $printer = new PrintNbitBinaryNumbers();
        $result  = $printer->solve(1);

        $expected = ['1'];
        $this->assertEquals($expected, $result);
    }

    public function testNEqualsTwo()
    {
        $printer = new PrintNbitBinaryNumbers();
        $result  = $printer->solve(2);

        $expected = ['11', '10'];
        sort($result);
        sort($expected);
        $this->assertEquals($expected, $result);
    }

    public function testNEqualsThree()
    {
        $printer = new PrintNbitBinaryNumbers();
        $result  = $printer->solve(3);

        $expected = ['111', '110', '101']; // removed '100'
        sort($result);
        sort($expected);
        $this->assertEquals($expected, $result);
    }

    public function testNEqualsZero()
    {
        $printer = new PrintNbitBinaryNumbers();
        $result  = $printer->solve(0);

        $expected = [''];
        $this->assertEquals($expected, $result);
    }
}
