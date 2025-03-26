<?php
namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\TrappingRainWaterOptimal;

class TrappingRainWaterOptimalTest extends TestCase
{
    public function testTrap()
    {
        $obj = new TrappingRainWaterOptimal();

        // Test Case 1: Standard case with valleys
        $height = [0,1,0,2,1,0,1,3,2,1,2,1];
        $this->assertEquals(6, $obj->trap($height));

        // Test Case 2: No water trapped (strictly increasing)
        $height = [0, 1, 2, 3, 4, 5];
        $this->assertEquals(0, $obj->trap($height));

        // Test Case 3: No water trapped (strictly decreasing)
        $height = [5, 4, 3, 2, 1, 0];
        $this->assertEquals(0, $obj->trap($height));

        // Test Case 4: Flat surface (no trapping)
        $height = [3, 3, 3, 3, 3];
        $this->assertEquals(0, $obj->trap($height));

        // Test Case 5: Small valley trapping water
        $height = [3, 0, 2, 0, 4];
        $this->assertEquals(7, $obj->trap($height));

        // Test Case 6: Single block (no trapping)
        $height = [1];
        $this->assertEquals(0, $obj->trap($height));

        // Test Case 7: Two blocks (no trapping)
        $height = [2, 2];
        $this->assertEquals(0, $obj->trap($height));

        // Test Case 8: Complex valley
        $height = [4, 2, 0, 3, 2, 5];
        $this->assertEquals(9, $obj->trap($height));

        // Test Case 9: Large input with alternating heights
        // $height = array_merge([5, 0, 5], array_fill(0, 1000, 1), [5, 0, 5]);
        // $this->assertEquals(10, $obj->trap($height));
    }
}
