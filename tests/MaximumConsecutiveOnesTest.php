<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\MaximumConsecutiveOnes;

class MaximumConsecutiveOnesTest extends TestCase
{
    public function testFindWithConsecutiveOnes()
    {
        $finder = new MaximumConsecutiveOnes();

        $this->assertEquals(3, $finder->find([1, 1, 0, 1, 1, 1]));
        $this->assertEquals(2, $finder->find([1, 1, 0, 0, 1]));
        $this->assertEquals(5, $finder->find([1, 1, 1, 1, 1]));
    }

    public function testFindWithNoOnes()
    {
        $finder = new MaximumConsecutiveOnes();

        $this->assertEquals(0, $finder->find([0, 0, 0, 0]));
        $this->assertEquals(0, $finder->find([])); // Empty array case
    }

    public function testFindWithMixedValues()
    {
        $finder = new MaximumConsecutiveOnes();

        $this->assertEquals(4, $finder->find([0, 1, 1, 1, 1, 0, 1, 1]));
        $this->assertEquals(1, $finder->find([1, 0, 0, 0, 1]));
    }

    public function testFindWithSingleElement()
    {
        $finder = new MaximumConsecutiveOnes();

        $this->assertEquals(1, $finder->find([1]));
        $this->assertEquals(0, $finder->find([0]));
    }
}
