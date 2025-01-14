<?php

use PHPUnit\Framework\TestCase;
use App\FindMissingLetter;

class FindMissingLetterTest extends TestCase {
    public function testFindMissingLetter() {
        $finder = new FindMissingLetter();
        $this->assertEquals('d', $finder->findMissingLetter(['a', 'b', 'c', 'e']));
        $this->assertEquals('R', $finder->findMissingLetter(['P', 'Q', 'S']));
        $this->assertEquals('', $finder->findMissingLetter(['a', 'b', 'c']));
    }
}
