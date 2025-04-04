<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\DeleteMiddleElementStack;

class DeleteMiddleElementStackTest extends TestCase
{
    public function testDeleteMiddleElementOddLength()
    {
        $stack = [1, 2, 3, 4, 5];
        $solver = new DeleteMiddleElementStack();
        $solver->solve($stack);

        $this->assertEquals([1, 2, 4, 5], $stack);
    }

    public function testDeleteMiddleElementEvenLength()
    {
        $stack = [1, 2, 3, 4, 5, 6];
        $solver = new DeleteMiddleElementStack();
        $solver->solve($stack);

        $this->assertEquals([1, 2, 3, 5, 6], $stack);
    }

    public function testDeleteMiddleElementSingleElement()
    {
        $stack = [1];
        $solver = new DeleteMiddleElementStack();
        $solver->solve($stack);

        $this->assertEquals([], $stack);
    }

    public function testDeleteMiddleElementEmptyStack()
    {
        $stack = [];
        $solver = new DeleteMiddleElementStack();
        $solver->solve($stack);

        $this->assertEquals([], $stack);
    }
}
