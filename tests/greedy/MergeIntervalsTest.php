<?php
namespace Tests\Greedy;

use App\Greedy\MergeIntervals;
use PHPUnit\Framework\TestCase;

class MergeIntervalsTest extends TestCase
{
    public function testMergeWithOverlappingIntervals()
    {
        $intervals = [[1, 3], [2, 6], [8, 10], [15, 18]];
        $expected  = [[1, 6], [8, 10], [15, 18]];

        $merger = new MergeIntervals();
        $result = $merger->merge($intervals);

        $this->assertEquals($expected, $result);
    }

    public function testMergeWithNestedIntervals()
    {
        $intervals = [[1, 4], [2, 3]];
        $expected  = [[1, 4]];

        $merger = new MergeIntervals();
        $result = $merger->merge($intervals);

        $this->assertEquals($expected, $result);
    }

    public function testMergeWithNonOverlappingIntervals()
    {
        $intervals = [[1, 2], [3, 4], [5, 6]];
        $expected  = [[1, 2], [3, 4], [5, 6]];

        $merger = new MergeIntervals();
        $result = $merger->merge($intervals);

        $this->assertEquals($expected, $result);
    }

    public function testMergeWithSingleInterval()
    {
        $intervals = [[5, 10]];
        $expected  = [[5, 10]];

        $merger = new MergeIntervals();
        $result = $merger->merge($intervals);

        $this->assertEquals($expected, $result);
    }

    public function testMergeWithEmptyInput()
    {
        $intervals = [];
        $expected  = [];

        $merger = new MergeIntervals();
        $result = $merger->merge($intervals);

        $this->assertEquals($expected, $result);
    }
}
