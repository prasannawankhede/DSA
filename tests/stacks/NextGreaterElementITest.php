<?php
namespace Tests\Stacks;

use App\Stacks\NextGreaterElementI;
use PHPUnit\Framework\TestCase;

class NextGreaterElementITest extends TestCase
{
    public function testFindNge()
    {
        $obj = new NextGreaterElementI();

        // Test Case 1: Basic Increasing Sequence
        $this->assertEquals([2, 3, -1], $obj->findNge([1, 2, 3]));

        // Test Case 2: Basic Decreasing Sequence
        $this->assertEquals([-1, -1, -1], $obj->findNge([3, 2, 1]));

        // Test Case 3: Single Element
        $this->assertEquals([-1], $obj->findNge([5]));

        // Test Case 4: Empty Array
        $this->assertEquals([], $obj->findNge([]));

        // Test Case 5: All Elements are the Same
        $this->assertEquals([-1, -1, -1, -1], $obj->findNge([7, 7, 7, 7]));

        // Test Case 6: Random Order
// Test Case 6: Random Order
$this->assertEquals([7, 7, 8, -1], $obj->findNge([6, 3, 7, 8]));
        // Test Case 7: Zigzag Pattern
        $this->assertEquals([6, 9, 9, -1, -1], $obj->findNge([5, 6, 2, 9, 3]));

        // Test Case 8: Large Numbers
// Test Case 8: Large Numbers
$this->assertEquals([1000000, 1000001, 1000001, -1], $obj->findNge([999999, 1000000, 1000000, 1000001]));
        // Test Case 9: Large Array
        $input = range(1, 1000);
        $expected = range(2, 1000);
        $expected[999] = -1; // Last element has no greater element
        $this->assertEquals($expected, $obj->findNge($input));

        // Test Case 10: Alternating Peaks
        $this->assertEquals([3, 5, 5, -1, -1], $obj->findNge([2, 3, 1, 5, 4]));
    }
}
