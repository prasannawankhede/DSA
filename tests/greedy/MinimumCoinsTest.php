<?php

use App\Greedy\MinimumCoins;
use PHPUnit\Framework\TestCase;

class MinimumCoinsTest extends TestCase
{
    public function testFindCoins()
    {
        $minCoins = new MinimumCoins();

        $this->assertEquals(
            [50, 20, 20, 2, 1],
            $minCoins->findCOins(93)
        );

        $this->assertEquals(
            [1000, 500, 100, 20, 5, 2, 1],
            $minCoins->findCOins(1628)
        );

        $this->assertEquals(
            [10],
            $minCoins->findCOins(10)
        );

        $this->assertEquals(
            [],
            $minCoins->findCOins(0)
        );
    }
}
