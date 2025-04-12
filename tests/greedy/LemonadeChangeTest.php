<?php

use App\Greedy\LemonadeChange;
use PHPUnit\Framework\TestCase;

class LemonadeChangeTest extends TestCase
{
    public function testFindChange()
    {
        $lc = new LemonadeChange();

        // Customer pays with exact change every time
        $this->assertTrue($lc->findChange([5, 5, 5, 10, 20]));

        // Can't give change for last $20
        $this->assertFalse($lc->findChange([5, 5, 10, 10, 20]));

        // Edge case: starts with 10
        $this->assertFalse($lc->findChange([10]));

        // Only $5 bills
        $this->assertTrue($lc->findChange([5, 5, 5, 5]));

        // Can break 20 with 3 fives
        $this->assertTrue($lc->findChange([5, 5, 5, 20]));

        // Fails with insufficient change for $20
        $this->assertFalse($lc->findChange([5, 10, 20]));
    }
}
