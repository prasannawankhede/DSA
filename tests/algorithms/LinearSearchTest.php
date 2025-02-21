<?php

namespace Test\Algorithms;

use App\Algorithms\LinearSearch;
use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    public function testLinearSearch()
    {
        $obj = new LinearSearch();

        // Element Present in the Middle
        $this->assertEquals(4, $obj->search([1, 2, 3, 4, 5, 6], 5));

        // Element Present at the Start
        $this->assertEquals(0, $obj->search([10, 20, 30, 40], 10));

        // Element Present at the End
        $this->assertEquals(3, $obj->search([7, 8, 9, 10], 10));

        // Element Not Present
        $this->assertEquals(-1, $obj->search([1, 3, 5, 7, 9], 4));

        // Empty Array
        $this->assertEquals(-1, $obj->search([], 5));

        // Single Element Array - Match
        $this->assertEquals(0, $obj->search([99], 99));

        // Single Element Array - No Match
        $this->assertEquals(-1, $obj->search([99], 100));

        // Duplicate Elements - First Occurrence
        $this->assertEquals(1, $obj->search([1, 2, 2, 3, 4], 2));
    }
}
