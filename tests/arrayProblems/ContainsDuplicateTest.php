<?php

namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\ContainsDuplicate;

class ContainsDuplicateTest extends TestCase
{
    /**
     * Test that an empty array returns false.
     */
    public function testEmptyArray()
    {
        $obj = new ContainsDuplicate();
        $this->assertFalse($obj->remove([]));
    }
    
    /**
     * Test that a single-element array returns false.
     */
    public function testSingleElement()
    {
        $obj = new ContainsDuplicate();
        $this->assertFalse($obj->remove([1]));
    }
    
    /**
     * Test that an array with no duplicate values returns false.
     */
    public function testNoDuplicates()
    {
        $obj = new ContainsDuplicate();
        $this->assertFalse($obj->remove([1, 2, 3, 4, 5]));
    }
    
    /**
     * Test that an array containing duplicates returns true.
     */
    public function testContainsDuplicates()
    {
        $obj = new ContainsDuplicate();
        // Example: duplicate '2' exists
        $this->assertTrue($obj->remove([1, 2, 3, 2]));
        // Example: duplicate '1' exists
        $this->assertTrue($obj->remove([1, 1, 2, 3]));
        // Example: duplicate '4' exists
        $this->assertTrue($obj->remove([1, 2, 3, 4, 4]));
    }
}
