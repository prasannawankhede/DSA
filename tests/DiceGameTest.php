<?php

use PHPUnit\Framework\TestCase;
use App\DiceGame;

class DiceGameTest extends TestCase
{
    public function testRollReturnsArray()
    {
        $diceGame = new DiceGame();
        $results = $diceGame->roll(5);

        // Assert that results are an array and contains exactly 5 rolls
        $this->assertIsArray($results, "The result should be an array.");
        $this->assertCount(5, $results, "The result should contain exactly 5 rolls.");
    }

    public function testEachRollContainsExpectedKeys()
    {
        $diceGame = new DiceGame();
        $results = $diceGame->roll(5);

        $this->assertNotEmpty($results, "The result array should not be empty.");

        foreach ($results as $roll) {
            // Ensure each roll contains all expected keys
            $this->assertArrayHasKey('dice1', $roll, "Each roll should have a 'dice1' key.");
            $this->assertArrayHasKey('dice2', $roll, "Each roll should have a 'dice2' key.");
            $this->assertArrayHasKey('sum', $roll, "Each roll should have a 'sum' key.");
            $this->assertArrayHasKey('result', $roll, "Each roll should have a 'result' key.");
        }
    }

    public function testResultContainsValidOutcomes()
    {
        $diceGame = new DiceGame();
        $results = $diceGame->roll(10);

        $this->assertNotEmpty($results, "The result array should not be empty.");

        $validOutcomes = ['win', 'lose', 'roll again'];

        foreach ($results as $roll) {
            // Assert that the result value is one of the valid outcomes
            $this->assertContains($roll['result'], $validOutcomes, "Result should be one of the valid outcomes.");
        }
    }

    public function testDiceValuesAreWithinRange()
    {
        $diceGame = new DiceGame();
        $results = $diceGame->roll(10);

        $this->assertNotEmpty($results, "The result array should not be empty.");

        foreach ($results as $roll) {
            // Assert that dice1 and dice2 values are between 1 and 6
            $this->assertGreaterThanOrEqual(1, $roll['dice1'], "Dice 1 should be at least 1.");
            $this->assertLessThanOrEqual(6, $roll['dice1'], "Dice 1 should be at most 6.");
            $this->assertGreaterThanOrEqual(1, $roll['dice2'], "Dice 2 should be at least 1.");
            $this->assertLessThanOrEqual(6, $roll['dice2'], "Dice 2 should be at most 6.");
        }
    }
}
