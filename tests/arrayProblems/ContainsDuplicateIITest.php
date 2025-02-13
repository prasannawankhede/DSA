<?php

namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\ContainsDuplicateII;

class ContainsDuplicateIITest extends TestCase {

    /**
     * Example 1:
     * Input: nums = [1,2,3,1], k = 3
     * Expected output: true
     */
    public function testExample1() {
        $obj = new ContainsDuplicateII();
        $this->assertTrue($obj->find([1, 2, 3, 1], 3));
    }

    /**
     * Example 2:
     * Input: nums = [1,0,1,1], k = 1
     * Expected output: true
     */
    public function testExample2() {
        $obj = new ContainsDuplicateII();
        $this->assertTrue($obj->find([1, 0, 1, 1], 1));
    }

    /**
     * Example 3:
     * Input: nums = [1,2,3,1,2,3], k = 2
     * Expected output: false
     */
    public function testExample3() {
        $obj = new ContainsDuplicateII();
        $this->assertFalse($obj->find([1, 2, 3, 1, 2, 3], 2));
    }

    /**
     * Additional test: No duplicates present.
     */
    public function testNoDuplicates() {
        $obj = new ContainsDuplicateII();
        $this->assertFalse($obj->find([1, 2, 3, 4, 5], 3));
    }
    
    /**
     * Additional test: k = 0.
     * Even if duplicates exist, they must be at the same index (which cannot happen).
     */
    public function testKZero() {
        $obj = new ContainsDuplicateII();
        $this->assertFalse($obj->find([1, 1], 0));
    }
}
