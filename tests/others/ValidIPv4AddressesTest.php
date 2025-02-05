<?php

use PHPUnit\Framework\TestCase;
use App\ValidIPv4Addresses;

class ValidIPv4AddressesTest extends TestCase
{
    public function testValidIPv4Addresses()
    {
        $validator = new ValidIPv4Addresses();

        // Valid IPv4 addresses
        $this->assertTrue($validator->check("192.168.1.1"), "Valid IPv4 address '192.168.1.1' should return true.");
        $this->assertTrue($validator->check("255.255.255.255"), "Valid IPv4 address '255.255.255.255' should return true.");
        $this->assertTrue($validator->check("0.0.0.0"), "Valid IPv4 address '0.0.0.0' should return true.");
    }

    public function testInvalidIPv4Addresses()
    {
        $validator = new ValidIPv4Addresses();

        // Invalid IPv4 addresses
        $this->assertFalse($validator->check("256.256.256.256"), "Invalid IPv4 address '256.256.256.256' should return false.");
        $this->assertFalse($validator->check("192.168.01.1"), "Invalid IPv4 address '192.168.01.1' should return false (leading zero).");
        $this->assertFalse($validator->check("192.168.1"), "Invalid IPv4 address '192.168.1' should return false (only 3 parts).");
        $this->assertFalse($validator->check("192.168.-1.1"), "Invalid IPv4 address '192.168.-1.1' should return false (negative number).");
        $this->assertFalse($validator->check("192.168.1.1.1"), "Invalid IPv4 address '192.168.1.1.1' should return false (more than 4 parts).");
        $this->assertFalse($validator->check("abc.def.ghi.jkl"), "Invalid IPv4 address 'abc.def.ghi.jkl' should return false (non-numeric parts).");
    }

    public function testEmptyString()
    {
        $validator = new ValidIPv4Addresses();

        // Test empty string
        $this->assertFalse($validator->check(""), "An empty string should return false.");
    }

    public function testWhitespaceOnlyString()
    {
        $validator = new ValidIPv4Addresses();

        // Test string with only spaces
        $this->assertFalse($validator->check("     "), "A string with only spaces should return false.");
    }
}
