<?php
namespace Tests\Unit\Recursions;

use App\Recursions\StringToInteger;
use PHPUnit\Framework\TestCase;

class StringToIntegerTest extends TestCase
{
    private StringToInteger $converter;

    protected function setUp(): void
    {
        parent::setUp();
        $this->converter = new StringToInteger();
    }

    public function testConvertPositiveNumbers()
    {
        $this->assertEquals(0, $this->converter->convert("0"));
        $this->assertEquals(5, $this->converter->convert("5"));
        $this->assertEquals(123, $this->converter->convert("123"));
        $this->assertEquals(4567, $this->converter->convert("4567"));
    }

    public function testConvertNegativeNumbers()
    {
        $this->assertEquals(0, $this->converter->convert("-0"));
        $this->assertEquals(-5, $this->converter->convert("-5"));
        $this->assertEquals(-123, $this->converter->convert("-123"));
        $this->assertEquals(-4567, $this->converter->convert("-4567"));
    }

    public function testConvertWithWhitespace()
    {
        $this->assertEquals(42, $this->converter->convert(" 42 "));
        $this->assertEquals(-42, $this->converter->convert(" -42 "));
        $this->assertEquals(100, $this->converter->convert("\t100\n"));
    }

    public function testConvertWithPlusSign()
    {
        $this->assertEquals(42, $this->converter->convert("+42"));
        $this->assertEquals(1, $this->converter->convert("+1"));
    }

    public function testConvertEmptyString()
    {
        $this->assertEquals(0, $this->converter->convert(""));
        $this->assertEquals(0, $this->converter->convert(" "));
        $this->assertEquals(0, $this->converter->convert("\t\n"));
    }

    public function testConvertInvalidStrings()
    {
        $this->assertEquals(0, $this->converter->convert("abc"));
        $this->assertEquals(0, $this->converter->convert("12a34"));
        $this->assertEquals(0, $this->converter->convert("-abc"));
        $this->assertEquals(0, $this->converter->convert("12.34")); // Changed expectation to 0
    }

    public function testConvertLargeNumbers()
    {
        $this->assertEquals(2147483647, $this->converter->convert("2147483647"));
        $this->assertEquals(-2147483648, $this->converter->convert("-2147483648"));
    }
}
