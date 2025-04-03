<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\ReverseStack;

class ReverseStackTest extends TestCase
{
    public function testReverseNormalStack()
    {
        $stack = [1, 2, 3, 4, 5];
        $expected = [5, 4, 3, 2, 1];

        $reverser = new ReverseStack();
        $reverser->reverse($stack);

        $this->assertSame($expected, $stack);
    }

    public function testReverseAlreadyReversedStack()
    {
        $stack = [5, 4, 3, 2, 1];
        $expected = [1, 2, 3, 4, 5];

        $reverser = new ReverseStack();
        $reverser->reverse($stack);

        $this->assertSame($expected, $stack);
    }

    public function testReverseSingleElementStack()
    {
        $stack = [42];
        $expected = [42];

        $reverser = new ReverseStack();
        $reverser->reverse($stack);

        $this->assertSame($expected, $stack);
    }

    public function testReverseEmptyStack()
    {
        $stack = [];
        $expected = [];

        $reverser = new ReverseStack();
        $reverser->reverse($stack);

        $this->assertSame($expected, $stack);
    }

    public function testReverseStackWithDuplicates()
    {
        $stack = [3, 1, 2, 1, 3];
        $expected = [3, 1, 2, 1, 3];

        $reverser = new ReverseStack();
        $reverser->reverse($stack);

        $this->assertSame(array_reverse($expected), $stack);
    }
}
