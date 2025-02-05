<?php

use PHPUnit\Framework\TestCase;
use App\PasswordValidation;

class PasswordValidationTest extends TestCase
{
    protected $validator;

    protected function setUp(): void
    {
        $this->validator = new PasswordValidation();
    }

    public function testValidPassword()
    {
        $this->assertTrue($this->validator->check("Valid123")); // Valid password
    }

    public function testPasswordTooShort()
    {
        $this->assertFalse($this->validator->check("Val1")); // Too short
    }

    public function testPasswordWithoutUppercase()
    {
        $this->assertFalse($this->validator->check("valid123")); // No uppercase letter
    }

    public function testPasswordWithoutLowercase()
    {
        $this->assertFalse($this->validator->check("VALID123")); // No lowercase letter
    }

    public function testPasswordWithoutDigit()
    {
        $this->assertFalse($this->validator->check("ValidPass")); // No digit
    }

    public function testPasswordWithSpecialCharacters()
    {
        $this->assertTrue($this->validator->check("Valid123@#")); // Includes special characters, still valid
    }

    public function testEmptyPassword()
    {
        $this->assertFalse($this->validator->check("")); // Empty string
    }

    public function testOnlyDigits()
    {
        $this->assertFalse($this->validator->check("12345678")); // Only digits
    }
}
