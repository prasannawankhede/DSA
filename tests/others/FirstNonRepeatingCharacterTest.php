<?php

use PHPUnit\Framework\TestCase;
use App\FirstNonRepeatingCharacter;

class FirstNonRepeatingCharacterTest extends TestCase {

    public function testNonRepeatingCharacterExists() {
        $obj = new FirstNonRepeatingCharacter();
        $result = $obj->char('swiss');
        $this->assertEquals('w', $result);
    }

    public function testAllCharactersRepeat() {
        $obj = new FirstNonRepeatingCharacter();
        $result = $obj->char('aabbcc');
        $this->assertNull($result);
    }

    public function testSingleCharacterString() {
        $obj = new FirstNonRepeatingCharacter();
        $result = $obj->char('z');
        $this->assertEquals('z', $result);
    }

    public function testEmptyString() {
        $obj = new FirstNonRepeatingCharacter();
        $result = $obj->char('');
        $this->assertNull($result);
    }

    public function testMultipleNonRepeatingCharacters() {
        $obj = new FirstNonRepeatingCharacter();
        $result = $obj->char('abcabcde');
        $this->assertEquals('d', $result);
    }
}
