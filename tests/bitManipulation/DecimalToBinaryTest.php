<?php
namespace Tests\BitManipulation;

use App\BitManipulation\DecimalToBinary;
use PHPUnit\Framework\TestCase;

class DecimalToBinaryTest extends TestCase
{
    public function testConvert()
    {
        $converter = new DecimalToBinary();

        $this->assertEquals('1', $converter->convert(1));
        $this->assertEquals('10', $converter->convert(2));
        $this->assertEquals('11', $converter->convert(3));
        $this->assertEquals('100', $converter->convert(4));
        $this->assertEquals('101', $converter->convert(5));
        $this->assertEquals('1100', $converter->convert(12));
        $this->assertEquals('1111000', $converter->convert(120));
        $this->assertEquals('10011000', $converter->convert(152));
        $this->assertEquals('0', $converter->convert(0)); // Edge case for zero
    }
}
