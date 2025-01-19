<?php

use PHPUnit\Framework\TestCase;
use App\FindMissingLetterRefactor;

class FindMissingLetterRefactorTest extends TestCase
{
    public function testUppercaseArray()
    {
        $finder = new FindMissingLetterRefactor();
        $this->assertEquals('C', $finder->give(['A', 'B', 'D']));
        $this->assertEquals('F', $finder->give(['D', 'E', 'G']));
    }

    public function testLowercaseArray()
    {
        $finder = new FindMissingLetterRefactor();
        $this->assertEquals('c', $finder->give(['a', 'b', 'd']));
        $this->assertEquals('f', $finder->give(['d', 'e', 'g']));
    }

    public function testNoMissingLetter()
    {
        $finder = new FindMissingLetterRefactor();
        $this->assertEquals('', $finder->give(['a', 'b', 'c']));
        $this->assertEquals('', $finder->give(['X', 'Y', 'Z']));
    }

    public function testSingleLetterArray()
    {
        $finder = new FindMissingLetterRefactor();
        $this->assertEquals('', $finder->give(['A']));
        $this->assertEquals('', $finder->give(['z']));
    }
}
