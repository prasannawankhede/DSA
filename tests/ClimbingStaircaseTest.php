<?php

use PHPUnit\Framework\TestCase;
use App\ClimbingStaircase;

class ClimbingStaircaseTest extends TestCase {

    public function testFindWithValidInput() {
        $staircase = new ClimbingStaircase();

        // Test for 1 step
        $this->assertEquals(1, $staircase->find(1));

        // Test for 2 steps
        $this->assertEquals(2, $staircase->find(2));

        // Test for 3 steps
        $this->assertEquals(3, $staircase->find(3));

        // Test for 4 steps
        $this->assertEquals(5, $staircase->find(4));

        // Test for 5 steps
        $this->assertEquals(8, $staircase->find(5));
    }

    public function testFindWithZeroSteps() {
        $staircase = new ClimbingStaircase();

        // Test for 0 steps
        $this->assertEquals(0, $staircase->find(0));
    }

    public function testFindWithNegativeSteps() {
        $staircase = new ClimbingStaircase();

        // Test for negative steps
        $this->assertEquals(0, $staircase->find(-1));
    }
}
