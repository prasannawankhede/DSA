<?php

use PHPUnit\Framework\TestCase;
use App\StringReverserRecursion;

class StringReverserRecursionTest extends TestCase
{
    public function testReverseWithRegularString()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('olleh', $reverser->reverse('hello'));
    }

    public function testReverseWithSingleCharacter()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('a', $reverser->reverse('a'));
    }

    public function testReverseWithEmptyString()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('', $reverser->reverse(''));
    }

    public function testReverseWithPalindrome()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('madam', $reverser->reverse('madam'));
    }

    public function testReverseWithSpaces()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('dlrow olleh', $reverser->reverse('hello world'));
    }

    public function testReverseWithNumbers()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('54321', $reverser->reverse('12345'));
    }

    public function testReverseWithSpecialCharacters()
    {
        $reverser = new StringReverserRecursion();
        $this->assertEquals('!@#$%', $reverser->reverse('%$#@!'));
    }
}
