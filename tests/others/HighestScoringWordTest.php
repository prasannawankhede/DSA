<?php

use PHPUnit\Framework\TestCase;
use App\HighestScoringWord;

class HighestScoringWordTest extends TestCase {

    public function testFindWithSimpleSentence() {
        $highestScoringWord = new HighestScoringWord();
        $result = $highestScoringWord->find("man i need a taxi up to ubud");
        $this->assertEquals('taxi', $result, "The highest scoring word in 'man i need a taxi up to ubud' should be 'taxi'.");
    }

    public function testFindWithAnotherExample() {
        $highestScoringWord = new HighestScoringWord();
        $result = $highestScoringWord->find("what time are we climbing up the volcano");
        $this->assertEquals('volcano', $result, "The highest scoring word in 'what time are we climbing up the volcano' should be 'volcano'.");
    }

    public function testFindWithAnotherLongSentence() {
        $highestScoringWord = new HighestScoringWord();
        $result = $highestScoringWord->find("take me to semynak");
        $this->assertEquals('semynak', $result, "The highest scoring word in 'take me to semynak' should be 'semynak'.");
    }
}
