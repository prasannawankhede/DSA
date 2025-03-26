<?php
namespace Tests\Stacks;

use App\Stacks\NearestSmallerElement;
use PHPUnit\Framework\TestCase;

class NearestSmallerElementTest extends TestCase
{
    public function testFind()
    {
        $obj = new NearestSmallerElement();

        // Test Case 1: General Case
        $this->assertEquals([-1, 4, -1, 2, 2], $obj->find([4, 5, 2, 10, 8]));

        // Test Case 2: Strictly Decreasing
        $this->assertEquals([-1, -1, -1], $obj->find([3, 2, 1]));

        // Test Case 3: Strictly Increasing
        $this->assertEquals([-1, 1, 2, 3], $obj->find([1, 2, 3, 4]));

        // Test Case 4: Random Order
        $this->assertEquals([-1, -1, 1, 3, -1, 1, 5], $obj->find([2, 1, 3, 4, 1, 5, 6]));

        // Test Case 5: All Identical Elements
        $this->assertEquals([-1, -1, -1, -1], $obj->find([5, 5, 5, 5]));

        // Test Case 6: Single Element
        $this->assertEquals([-1], $obj->find([7]));

        // Test Case 7: Large Input
        $this->assertEquals([-1, 1, 2, 3, 4, 5, 6, 7, 8, 9], $obj->find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));

        // Test Case 8: Alternating Highs and Lows
        $this->assertEquals([-1, 1, 1, 2, 2, 3], $obj->find([1, 10, 2, 9, 3, 8]));

        // Test Case 9: Large Decreasing Order
        $this->assertEquals([-1, -1, -1, -1, -1, -1, -1], $obj->find([100, 50, 40, 30, 20, 10, 5]));

        // Test Case 10: Random Mixed Numbers
        $this->assertEquals([-1, -1, 3, -1, 2, 2, 4, -1], $obj->find([5, 3, 8, 2, 6, 4, 9, 1]));
    }
}
