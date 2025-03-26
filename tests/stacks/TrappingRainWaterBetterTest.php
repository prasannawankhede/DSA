<?php
namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\TrappingRainWaterBetter;

class TrappingRainWaterBetterTest extends TestCase
{
    public function testTotalWater()
    {
        $obj = new TrappingRainWaterBetter();

        // Test Case 1: General Case
        $arr = [3, 0, 2, 0, 4];
        $expected = 7;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 2: No trapping water
        $arr = [1, 2, 3, 4, 5];
        $expected = 0;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 3: Water trapped between two heights
        $arr = [4, 2, 0, 3, 2, 5];
        $expected = 9;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 4: Single-element array (no water)
        $arr = [5];
        $expected = 0;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 5: Two-element array (no water)
        $arr = [3, 5];
        $expected = 0;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 6: Empty array (edge case)
        $arr = [];
        $expected = 0;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 7: All bars of the same height (no water trapped)
        $arr = [2, 2, 2, 2, 2];
        $expected = 0;
        $this->assertEquals($expected, $obj->totalWater($arr));

        // Test Case 8: Large input with varying heights
        $arr = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
        $expected = 6;
        $this->assertEquals($expected, $obj->totalWater($arr));
    }
}
