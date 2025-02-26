<?php
namespace App\ArrayProblems;

use PHPUnit\Framework\TestCase;

class ImplementLowerBoundTest extends TestCase
{
    public function testLower()
    {
        $obj = new ImplementLowerBound();

        // Test Case 1: General case
        $this->assertEquals(1, $obj->floor([1, 2, 8, 10, 11, 12, 19], 5)); // Floor is 2 (index 1)
        
        // Test Case 2: Element exists in array
        $this->assertEquals(2, $obj->floor([1, 2, 8, 10, 11, 12, 19], 8)); // Floor is 8 (index 2)
        
        // Test Case 3: Element smaller than all elements
        $this->assertEquals(-1, $obj->floor([1, 2, 8, 10, 11, 12, 19], 0)); // No floor, return -1
        
        // Test Case 4: Element greater than all elements
        $this->assertEquals(6, $obj->floor([1, 2, 8, 10, 11, 12, 19], 20)); // Floor is 19 (index 6)

        // Test Case 5: Floor is the last element
        $this->assertEquals(4, $obj->floor([1, 2, 5, 8, 10, 15], 10)); // Floor is 10 (index 4)

        // Test Case 6: Floor is the first element
        $this->assertEquals(0, $obj->floor([1, 3, 5, 7, 9], 1)); // Floor is 1 (index 0)

        // Test Case 7: Empty array
        $this->assertEquals(-1, $obj->floor([], 5)); // No floor, return -1

        // Test Case 8: Single element array (value is the floor)
        $this->assertEquals(0, $obj->floor([3], 3)); // Floor is 3 (index 0)

        // Test Case 9: Single element array (no floor)
        $this->assertEquals(-1, $obj->floor([5], 3)); // No floor, return -1
    }
}
