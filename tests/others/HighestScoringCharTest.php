<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\HighestScoringChar;

class HighestScoringCharTest extends TestCase {

    public function testFindWithSimpleString() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("abcde");
        $this->assertEquals('e', $result, "The highest scoring character in 'abcde' should be 'e'.");
    }

    public function testFindWithMixedCaseString() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("Hello World");
        $this->assertEquals('w', $result, "The highest scoring character in 'Hello World' should be 'w'.");
    }

    public function testFindWithNonAlphabeticCharacters() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("Hello! World123");
        $this->assertEquals('w', $result, "The highest scoring character in 'Hello! World123' should be 'w'.");
    }

    public function testFindWithSpacesOnly() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("    ");
        $this->assertNull($result, "The highest scoring character in an empty string should be null.");
    }

    public function testFindWithEmptyString() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("");
        $this->assertNull($result, "The highest scoring character in an empty string should be null.");
    }

    public function testFindWithAllSameCharacters() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("aaaaa");
        $this->assertEquals('a', $result, "The highest scoring character in 'aaaaa' should be 'a'.");
    }

    public function testFindWithSingleCharacter() {
        $highestScoringChar = new HighestScoringChar();
        $result = $highestScoringChar->find("z");
        $this->assertEquals('z', $result, "The highest scoring character in 'z' should be 'z'.");
    }
}
