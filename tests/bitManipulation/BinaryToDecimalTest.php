<?php
namespace Tests\BitManipulation;

use App\BitManipulation\BinaryToDecimal;
use PHPUnit\Framework\TestCase;

class BinaryToDecimalTest extends TestCase
{
    public function testConvert()
    {
        $solution = new BinaryToDecimal();

        // Basic test cases
        $this->assertEquals(0, $solution->convert("0"));
        $this->assertEquals(1, $solution->convert("1"));
        $this->assertEquals(2, $solution->convert("10"));
        $this->assertEquals(3, $solution->convert("11"));
        $this->assertEquals(4, $solution->convert("100"));
        $this->assertEquals(5, $solution->convert("101"));
        $this->assertEquals(6, $solution->convert("110"));
        $this->assertEquals(7, $solution->convert("111"));

        // Larger numbers
        $this->assertEquals(11, $solution->convert("1011"));
        $this->assertEquals(15, $solution->convert("1111"));
        $this->assertEquals(42, $solution->convert("101010"));
        $this->assertEquals(255, $solution->convert("11111111"));
        $this->assertEquals(1023, $solution->convert("1111111111"));

        // Edge cases
        $this->assertEquals(0, $solution->convert(""));
        $this->assertEquals(0, $solution->convert("0000"));
        $this->assertEquals(1, $solution->convert("0001"));
    }
}
