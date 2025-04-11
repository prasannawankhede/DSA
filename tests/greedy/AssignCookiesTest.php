<?php

use App\Greedy\AssignCookies;
use PHPUnit\Framework\TestCase;

class AssignCookiesTest extends TestCase
{
    public function testBasicSatisfaction()
    {
        $assignCookies = new AssignCookies();

        $greed   = [1, 2, 3];
        $cookies = [1, 1];

        $this->assertEquals(1, $assignCookies->satisfyGreed($greed, $cookies));
    }

    public function testAllChildrenSatisfied()
    {
        $assignCookies = new AssignCookies();

        $greed   = [1, 2];
        $cookies = [1, 2, 3];

        $this->assertEquals(2, $assignCookies->satisfyGreed($greed, $cookies));
    }

    public function testNoChildSatisfied()
    {
        $assignCookies = new AssignCookies();

        $greed   = [5, 6];
        $cookies = [1, 2, 3];

        $this->assertEquals(0, $assignCookies->satisfyGreed($greed, $cookies));
    }

    public function testEmptyInputs()
    {
        $assignCookies = new AssignCookies();

        $this->assertEquals(0, $assignCookies->satisfyGreed([], []));
        $this->assertEquals(0, $assignCookies->satisfyGreed([1, 2, 3], []));
        $this->assertEquals(0, $assignCookies->satisfyGreed([], [1, 2, 3]));
    }
}
