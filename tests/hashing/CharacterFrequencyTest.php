<?php

namespace Tests\Hashing;

use App\Hashing\CharacterFrequency;
use PHPUnit\Framework\TestCase;

class CharacterFrequencyTest extends TestCase
{
    public function testBasicString()
    {
        $charFreq = new CharacterFrequency();
        $result = $charFreq->getFrequencies("hello");

        $expected = array_fill(0, 26, 0);
        $expected[7] = 1;  // 'h' -> index 7
        $expected[4] = 1;  // 'e' -> index 4
        $expected[11] = 2; // 'l' -> index 11
        $expected[14] = 1; // 'o' -> index 14

        $this->assertEquals($expected, $result);
    }

    public function testEmptyString()
    {
        $charFreq = new CharacterFrequency();
        $result = $charFreq->getFrequencies("");

        $expected = array_fill(0, 26, 0); // All zeros for an empty string

        $this->assertEquals($expected, $result);
    }

    public function testStringWithAllSameCharacters()
    {
        $charFreq = new CharacterFrequency();
        $result = $charFreq->getFrequencies("aaaaa");

        $expected = array_fill(0, 26, 0);
        $expected[0] = 5; // 'a' appears 5 times

        $this->assertEquals($expected, $result);
    }

    public function testStringWithMultipleCharacters()
    {
        $charFreq = new CharacterFrequency();
        $result = $charFreq->getFrequencies("abcabcabc");

        $expected = array_fill(0, 26, 0);
        $expected[0] = 3; // 'a'
        $expected[1] = 3; // 'b'
        $expected[2] = 3; // 'c'

        $this->assertEquals($expected, $result);
    }

    // public function testStringWithUppercaseLettersIgnored()
    // {
    //     $charFreq = new CharacterFrequency();
    //     $result = $charFreq->getFrequencies("ABCabc");

    //     // Ensure only lowercase letters are counted
    //     $expected = array_fill(0, 26, 0);
    //     $expected[0] = 3; // 'a'
    //     $expected[1] = 3; // 'b'
    //     $expected[2] = 3; // 'c'

    //     $this->assertEquals($expected, $result);
    // }

    public function testStringWithNonAlphabetCharactersIgnored()
    {
        $charFreq = new CharacterFrequency();
        $result = $charFreq->getFrequencies("a1b2c3a!b@c#a");

        // Ensure only lowercase letters are counted
        $expected = array_fill(0, 26, 0);
        $expected[0] = 3; // 'a'
        $expected[1] = 2; // 'b'
        $expected[2] = 2; // 'c'

        $this->assertEquals($expected, $result);
    }
}
