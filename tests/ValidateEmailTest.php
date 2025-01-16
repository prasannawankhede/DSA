<?php

use PHPUnit\Framework\TestCase;
use App\ValidateEmail;

class ValidateEmailTest extends TestCase
{
    public function testValidEmail()
    {
        $validator = new ValidateEmail();

        // Valid email addresses
        $this->assertTrue($validator->validateEmail('user@example.com'));
        $this->assertTrue($validator->validateEmail('user.name+tag@sub.domain.com'));
        $this->assertTrue($validator->validateEmail('user_name@domain.co'));
    }

    public function testInvalidEmail()
    {
        $validator = new ValidateEmail();

        // Invalid email addresses
        $this->assertFalse($validator->validateEmail('userexample.com')); // Missing '@'
        $this->assertFalse($validator->validateEmail('user@.com'));       // Missing domain name
        $this->assertFalse($validator->validateEmail('@example.com'));   // Missing local part
        $this->assertFalse($validator->validateEmail('user@com'));       // Invalid domain extension
        $this->assertFalse($validator->validateEmail('user@domain.c'));  // Domain extension too short
    }
}
