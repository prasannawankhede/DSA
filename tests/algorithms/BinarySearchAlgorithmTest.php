<?php

namespace Test\Algorithms;

use App\Algorithms\BinarySearchAlgorithm;
use PHPUnit\Framework\TestCase;

class BinarySearchAlgorithmTest extends TestCase
{
    public function testBinarySearch()
    {
        $obj = new BinarySearchAlgorithm();

        // Element Found at Start
        $this->assertEquals(0, $obj->search([1, 3, 5, 7, 9], 1));

        // Element Found at Middle
        $this->assertEquals(2, $obj->search([1, 3, 5, 7, 9], 5));

        // Element Found at End
        $this->assertEquals(4, $obj->search([1, 3, 5, 7, 9], 9));

        // Element Not Found
        $this->assertEquals(-1, $obj->search([1, 3, 5, 7, 9], 6));

        // Empty Array
        $this->assertEquals(-1, $obj->search([], 5));

        // Single Element Array - Match
        $this->assertEquals(0, $obj->search([10], 10));

        // Single Element Array - No Match
        $this->assertEquals(-1, $obj->search([10], 20));
    }
}
