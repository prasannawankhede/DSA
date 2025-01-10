<?php

use PHPUnit\Framework\TestCase;
use App\CountOccurrences;

class CountOccurrencesTest extends TestCase {
    public function testCountOccurrences() {
        $obj = new CountOccurrences();
        
        // Test case 1: Normal string
        $this->assertEquals(2, $obj->count("hello world", "o"));

        // Test case 2: Character not found
        $this->assertEquals(0, $obj->count("hello world", "z"));

        // Test case 3: Empty string
        $this->assertEquals(0, $obj->count("", "o"));

        // Test case 4: Single character string
        $this->assertEquals(1, $obj->count("o", "o"));

        // Test case 5: Multiple occurrences
        $this->assertEquals(3, $obj->count("banana", "a"));
    }
}
