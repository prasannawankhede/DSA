<?php

use App\LinerSearch;
use PHPUnit\Framework\TestCase;

class LinerSearchTest extends TestCase {
    public function testLinear() {
        $obj = new LinerSearch();
        
        // Searching for 5 in the array [1, 2, 3, 4, 5, 6]
        $result = $obj->search(5, [1, 2, 3, 4, 5, 6]);
        
        // Asserting that the result should be 4 (the index of 5)
        $this->assertEquals(4, $result);
    }
}
