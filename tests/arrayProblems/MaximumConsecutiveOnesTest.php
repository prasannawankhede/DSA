<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\MaximumConsecutiveOnes;

class MaximumConsecutiveOnesTest extends TestCase
{
    public function testFind()
    {
        $maxConsecutiveOnes = new MaximumConsecutiveOnes();

        // Test cases
        $this->assertEquals(3, $maxConsecutiveOnes->find([1, 1, 0, 1, 1, 1, 0, 1]));
        $this->assertEquals(2, $maxConsecutiveOnes->find([1, 1, 0, 0, 1, 0, 1, 1]));
        $this->assertEquals(5, $maxConsecutiveOnes->find([1, 1, 1, 1, 1, 0, 1]));
        $this->assertEquals(0, $maxConsecutiveOnes->find([0, 0, 0, 0]));
        $this->assertEquals(4, $maxConsecutiveOnes->find([1, 1, 1, 1]));
        $this->assertEquals(1, $maxConsecutiveOnes->find([0, 0, 1, 0, 0, 0]));
        $this->assertEquals(0, $maxConsecutiveOnes->find([])); // Edge case: empty array
    }
}
