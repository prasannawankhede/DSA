<?php
use App\SlidingWindow\FirstNegativeInWindow;
use PHPUnit\Framework\TestCase;

class FirstNegativeInWindowTest extends TestCase
{
    public function testFirstNegatives()
    {
        $firstNegative = new FirstNegativeInWindow();

        $this->assertEquals(
            [-1, -1, -7, 0, 0, 0],
            $firstNegative->firstNegatives([12, -1, -7, 8, 15, 30, 16, 28], 3)
        );

        $this->assertEquals(
            [0, 0, 0],
            $firstNegative->firstNegatives([1, 2, 3, 4, 5], 3)
        );

        $this->assertEquals(
            [-5, -2, 0],
            $firstNegative->firstNegatives([-5, -2, 3, 4, 5], 3)
        );

        $this->assertEquals(
            [-4, -4],
            $firstNegative->firstNegatives([1, 2, -4, -5], 3)
        );

        $this->assertEquals(
            [],
            $firstNegative->firstNegatives([], 3)
        );

        $this->assertEquals(
            [],
            $firstNegative->firstNegatives([1, 2], 3)
        );
    }
}
