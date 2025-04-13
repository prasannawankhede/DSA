<?php
namespace Tests\Greedy;

use App\Greedy\NonOverlappingIntervals;
use PHPUnit\Framework\TestCase;

class NonOverlappingIntervalsTest extends TestCase
{
    public function testNonOverlappingIntervals()
    {
        $intervals = [
            [1, 2],
            [2, 3],
            [3, 4],
            [1, 3],
        ];

        $nonOverlap = new NonOverlappingIntervals();
        $result     = $nonOverlap->find($intervals);

        $this->assertEquals(1, $result); // Expected 1 removal to avoid overlap
    }

    public function testWithAllOverlapping()
    {
        $intervals = [
            [1, 4],
            [2, 5],
            [3, 6],
        ];

        $nonOverlap = new NonOverlappingIntervals();
        $result     = $nonOverlap->find($intervals);

        $this->assertEquals(2, $result); // Expected 2 removals
    }

    public function testWithNoOverlap()
    {
        $intervals = [
            [1, 2],
            [3, 4],
            [5, 6],
        ];

        $nonOverlap = new NonOverlappingIntervals();
        $result     = $nonOverlap->find($intervals);

        $this->assertEquals(0, $result); // No removals needed
    }

    public function testSingleInterval()
    {
        $intervals = [
            [1, 10],
        ];

        $nonOverlap = new NonOverlappingIntervals();
        $result     = $nonOverlap->find($intervals);

        $this->assertEquals(0, $result); // Single interval, no removals
    }

    public function testEmptyIntervals()
    {
        $intervals = [];

        $nonOverlap = new NonOverlappingIntervals();
        $result     = $nonOverlap->find($intervals);

        $this->assertEquals(0, $result); // Empty list, no removals
    }
}
