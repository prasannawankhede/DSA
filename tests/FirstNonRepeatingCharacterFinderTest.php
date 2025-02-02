<?php

use PHPUnit\Framework\TestCase;
use App\FirstNonRepeatingCharacterFinder;

class FirstNonRepeatingCharacterFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new FirstNonRepeatingCharacterFinder();
    }

    public function testFindFirstNonRepeatingWithUniqueCharacter()
    {
        $input = "swiss";
        $expected = "w";
        $this->assertEquals($expected, $this->finder->findFirstNonRepeating($input));
    }

    public function testFindFirstNonRepeatingWithMiddleUniqueCharacter()
    {
        $input = "racecar";
        $expected = "e";
        $this->assertEquals($expected, $this->finder->findFirstNonRepeating($input));
    }

    public function testFindFirstNonRepeatingWithAllRepeatingCharacters()
    {
        $input = "aabbcc";
        $expected = null;
        $this->assertEquals($expected, $this->finder->findFirstNonRepeating($input));
    }

    public function testFindFirstNonRepeatingWithSingleCharacter()
    {
        $input = "z";
        $expected = "z";
        $this->assertEquals($expected, $this->finder->findFirstNonRepeating($input));
    }

    public function testFindFirstNonRepeatingWithEmptyString()
    {
        $input = "";
        $expected = null;
        $this->assertEquals($expected, $this->finder->findFirstNonRepeating($input));
    }
}
