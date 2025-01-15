<?php

namespace Tests\App;

use App\FormatPhoneNumber;
use PHPUnit\Framework\TestCase;

class FormatPhoneNumberTest extends TestCase
{
    protected $formatter;

    protected function setUp(): void
    {
        $this->formatter = new FormatPhoneNumber();
    }

    public function testValidPhoneNumber()
    {
        $input = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $expected = "(123) 456-7890";
        $this->assertEquals($expected, $this->formatter->dial($input));
    }

    public function testInvalidPhoneNumberTooShort()
    {
        $input = ['1', '2', '3']; // Less than 10 digits
        $this->assertNull($this->formatter->dial($input));
    }

    public function testInvalidPhoneNumberEmptyArray()
    {
        $input = []; // No digits
        $this->assertNull($this->formatter->dial($input));
    }

    public function testInvalidPhoneNumberExactLength()
    {
        $input = ['1', '2', '3', '4', '5']; // Exactly 5 digits
        $this->assertNull($this->formatter->dial($input));
    }

    public function testInvalidPhoneNumberInsufficientDigits()
    {
        $input = ['1', '2', '3', '4', '5', '6', '7']; // 7 digits
        $this->assertNull($this->formatter->dial($input));
    }

    public function testValidPhoneNumberWithLeadingZeros()
    {
        $input = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $expected = "(012) 345-6789"; // Check leading zeros
        $this->assertEquals($expected, $this->formatter->dial($input));
    }
}
