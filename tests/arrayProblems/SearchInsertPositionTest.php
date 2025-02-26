<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SearchInsertPosition;

class SearchInsertPositionTest extends TestCase
{
    public function testSearchInsertPosition()
    {
        $obj = new SearchInsertPosition();

        // Test case: Target exists in array
        $this->assertEquals(2, $obj->search([1, 3, 5, 6], 5));

        // Test case: Target should be inserted in between
        $this->assertEquals(1, $obj->search([1, 3, 5, 6], 2));

        // Test case: Target should be inserted at the end
        $this->assertEquals(4, $obj->search([1, 3, 5, 6], 7));

        // Test case: Target should be inserted at the start
        $this->assertEquals(0, $obj->search([1, 3, 5, 6], 0));

        // Test case: Target is the smallest element in a single-element array
        $this->assertEquals(0, $obj->search([3], 2));

        // Test case: Target is larger than the only element in array
        $this->assertEquals(1, $obj->search([3], 5));

        // Test case: Empty array (should insert at index 0)
        $this->assertEquals(0, $obj->search([], 5));
    }
}
