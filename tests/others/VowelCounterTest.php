<?php

use PHPUnit\Framework\TestCase;
use App\VowelCounter;

class VowelCounterTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function testCountVowels() {
        $vowelCounter = new VowelCounter();

        // Test cases
        $result = $vowelCounter->countVowels('hello');
        $this->assertEquals(2, $result, "Test failed for 'hello'");

        $result = $vowelCounter->countVowels('world');
        $this->assertEquals(1, $result, "Test failed for 'world'");

        $result = $vowelCounter->countVowels('aeiou');
        $this->assertEquals(5, $result, "Test failed for 'aeiou'");

        $result = $vowelCounter->countVowels('HELLO');
        $this->assertEquals(2, $result, "Test failed for 'HELLO'");

        $result = $vowelCounter->countVowels('xyz');
        $this->assertEquals(0, $result, "Test failed for 'xyz'");

        $result = $vowelCounter->countVowels('');
        $this->assertEquals(0, $result, "Test failed for empty string");

        // Test case for non-ASCII characters (including accented vowels)
        // $result = $vowelCounter->countVowels('àèìòù');
        // $this->assertEquals(5, $result, "Test failed for 'àèìòù'");
    }
}
