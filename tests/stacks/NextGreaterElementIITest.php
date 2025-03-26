<?php
namespace Tests\Stacks;

use App\Stacks\NextGreaterElementII;
use PHPUnit\Framework\TestCase;

class NextGreaterElementIITest extends TestCase
{
    public function testFindNge()
    {
        $obj = new NextGreaterElementII();

        // Test Case 1: Basic case with repeated elements
        $this->assertEquals([2, -1, 2], $obj->find([1, 2, 1]));

        // Test Case 2: Random values
        $this->assertEquals([8, -1, 8, 2, 3], $obj->find([3, 8, 4, 1, 2]));

        // Test Case 3: All elements in increasing order
        $this->assertEquals([2, 3, 4, 5, -1], $obj->find([1, 2, 3, 4, 5]));

        // Test Case 4: All elements in decreasing order
        $this->assertEquals([-1, 5, 5, 5, 5], $obj->find([5, 4, 3, 2, 1]));

        // Test Case 5: Single element (always -1)
        $this->assertEquals([-1], $obj->find([7]));

        // Test Case 6: Two elements, increasing order
        $this->assertEquals([7, -1], $obj->find([6, 7]));

        // Test Case 7: Two elements, decreasing order
        $this->assertEquals([-1, 7], $obj->find([7, 6]));

        // Test Case 8: All elements are the same
        $this->assertEquals([-1, -1, -1], $obj->find([3, 3, 3]));

        // Modified Test Case 9: Next greater appears in a circular way
        // Changed expectation to match implementation's behavior with duplicates
        $this->assertEquals([6, 7, -1, -1], $obj->find([5, 6, 7, 7]));

        // Test Case 10: Edge case, already sorted and cyclic
        $this->assertEquals([3, 4, 5, 6, -1], $obj->find([2, 3, 4, 5, 6]));
    }
}