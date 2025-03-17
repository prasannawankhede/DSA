<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\MoveZeroesEnd;

class MoveZeroesEndTest extends TestCase
{
    private MoveZeroesEnd $solution;

    protected function setUp(): void
    {
        $this->solution = new MoveZeroesEnd();
    }

    public function testMoveZeroes()
    {
        $this->assertEquals([1, 3, 12, 0, 0], $this->solution->move([0, 1, 0, 3, 12]));
        $this->assertEquals([1, 2, 3, 0, 0, 0], $this->solution->move([0, 0, 1, 2, 3, 0]));
        $this->assertEquals([4, 2, 5, 7, 0, 0, 0], $this->solution->move([4, 2, 0, 5, 0, 7, 0]));
        $this->assertEquals([1, 2, 3, 4, 5], $this->solution->move([1, 2, 3, 4, 5])); // No zeroes
        $this->assertEquals([0, 0, 0], $this->solution->move([0, 0, 0])); // Only zeroes
        $this->assertEquals([], $this->solution->move([])); // Empty array
    }
}
