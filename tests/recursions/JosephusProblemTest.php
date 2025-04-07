<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\JosephusProblem;

class JosephusProblemTest extends TestCase
{
    public function testNEquals1KEquals1()
    {
        $jp = new JosephusProblem();
        $this->assertEquals(1, $jp->solve(1, 1));
    }

    public function testNEquals5KEquals2()
    {
        $jp = new JosephusProblem();
        $this->assertEquals(3, $jp->solve(5, 2));
    }

    public function testNEquals7KEquals3()
    {
        $jp = new JosephusProblem();
        $this->assertEquals(4, $jp->solve(7, 3));
    }

    public function testNEquals10KEquals1()
    {
        $jp = new JosephusProblem();
        $this->assertEquals(10, $jp->solve(10, 1));
    }

    public function testNEquals6KEquals7()
    {
        $jp = new JosephusProblem();
        $this->assertEquals(5, $jp->solve(6, 7));
    }
}
