<?php
namespace Tests\Heap;

use App\Heap\ConnectRopesMinimiseCost;
use PHPUnit\Framework\TestCase;

class ConnectRopesMinimiseCostTest extends TestCase
{
    public function testExample1()
    {
        $solver   = new ConnectRopesMinimiseCost();
        $ropes    = [4, 3, 2, 6];
        $expected = 29; // Steps: (2+3)=5, (5+4)=9, (9+6)=15 => Total = 5+9+15=29
        $this->assertEquals($expected, $solver->findCost($ropes));
    }

    public function testExample2()
    {
        $solver   = new ConnectRopesMinimiseCost();
        $ropes    = [1, 2, 3, 4, 5];
        $expected = 33; // Min cost sequence
        $this->assertEquals($expected, $solver->findCost($ropes));
    }

    public function testSingleRope()
    {
        $solver   = new ConnectRopesMinimiseCost();
        $ropes    = [7];
        $expected = 0; // No cost if only one rope
        $this->assertEquals($expected, $solver->findCost($ropes));
    }

    public function testEmptyArray()
    {
        $solver   = new ConnectRopesMinimiseCost();
        $ropes    = [];
        $expected = 0; // No cost if no ropes
        $this->assertEquals($expected, $solver->findCost($ropes));
    }
}
