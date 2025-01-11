<?php

use PHPUnit\Framework\TestCase;
use App\ReverseString;

class ReverseStringTest extends TestCase
{
    public function testReversesAStringCorrectly()
    {
        $reverser = new ReverseString();

        $this->assertEquals("olleh", $reverser->reverse("hello"));
        $this->assertEquals("dlrow", $reverser->reverse("world"));
        $this->assertEquals("", $reverser->reverse("")); // Empty string
        $this->assertEquals("a", $reverser->reverse("a")); // Single character
    }

    public function testHandlesSpecialCharactersAndSpaces()
    {
        $reverser = new ReverseString();

        $this->assertEquals("!dlroW ,olleH", $reverser->reverse("Hello, World!"));
        $this->assertEquals("321 654", $reverser->reverse("456 123"));
        $this->assertEquals("  ", $reverser->reverse("  ")); // Two spaces
    }
}
