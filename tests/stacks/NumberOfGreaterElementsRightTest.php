<?php
namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\NumberOfGreaterElementsRight;

class NumberOfGreaterElementsRightTest extends TestCase
{
    public function testFind()
    {
        $obj = new NumberOfGreaterElementsRight();

        

        // Test case 2
        $arr = [1, 2, 3, 4, 1];
        $queries = [0, 3];
        $expected = [3, 0];
        $this->assertEquals($expected, $obj->find($arr, $queries));

        // Test case 3 (All elements same)
        $arr = [5, 5, 5, 5, 5];
        $queries = [0, 2, 4];
        $expected = [0, 0, 0];
        $this->assertEquals($expected, $obj->find($arr, $queries));

        // Test case 4 (Decreasing order)
        $arr = [10, 9, 8, 7, 6];
        $queries = [0, 2, 4];
        $expected = [0, 0, 0];
        $this->assertEquals($expected, $obj->find($arr, $queries));

        // Test case 5 (Increasing order)
        $arr = [1, 2, 3, 4, 5];
        $queries = [0, 1, 4];
        $expected = [4, 3, 0];
        $this->assertEquals($expected, $obj->find($arr, $queries));
    }
}