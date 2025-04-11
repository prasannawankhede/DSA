<?php

use App\Greedy\FractionalKnapsack;
use PHPUnit\Framework\TestCase;

class FractionalKnapsackTest extends TestCase
{
    public function testBasicKnapsack()
    {
        $items = [
            new FractionalKnapsack(100, 20),
            new FractionalKnapsack(60, 10),
            new FractionalKnapsack(120, 30),
        ];

        $capacity = 50;
        $knapsack = new FractionalKnapsack(0, 0); // Dummy object just to call the method

        $result = $knapsack->greedy($capacity, $items);

        $this->assertEquals(240.0, round($result, 2));
    }

    public function testExactFit()
    {
        $items = [
            new FractionalKnapsack(80, 20),
            new FractionalKnapsack(100, 30),
        ];

        $capacity = 50;
        $knapsack = new FractionalKnapsack(0, 0);

        $result = $knapsack->greedy($capacity, $items);

        $this->assertEquals(180.0, round($result, 2));
    }

    public function testFractionOnly()
    {
        $items = [
            new FractionalKnapsack(100, 100),
        ];

        $capacity = 10;
        $knapsack = new FractionalKnapsack(0, 0);

        $result = $knapsack->greedy($capacity, $items);

        $this->assertEquals(10.0, round($result, 2));
    }

    public function testEmptyItems()
    {
        $items    = [];
        $capacity = 50;
        $knapsack = new FractionalKnapsack(0, 0);

        $result = $knapsack->greedy($capacity, $items);

        $this->assertEquals(0.0, round($result, 2));
    }
}
