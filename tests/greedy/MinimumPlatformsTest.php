<?php
use App\Greedy\MinimumPlatforms;
use PHPUnit\Framework\TestCase;

class MinimumPlatformsTest extends TestCase
{
    public function testFindMinimumPlatforms()
    {
        $platforms = new MinimumPlatforms();

        // Test Case 1: Original example
        $arrivals   = [900, 940, 950, 1100, 1500, 1800];
        $departures = [910, 1200, 1120, 1130, 1900, 2000];
        $this->assertEquals(3, $platforms->findMinimumPlatforms($arrivals, $departures));

        // Test Case 2: All trains arrive at the same time
        $arrivals   = [1000, 1000, 1000];
        $departures = [1010, 1015, 1020];
        $this->assertEquals(3, $platforms->findMinimumPlatforms($arrivals, $departures));

        // Test Case 3: No overlapping trains
        $arrivals   = [900, 1000, 1100];
        $departures = [930, 1030, 1130];
        $this->assertEquals(1, $platforms->findMinimumPlatforms($arrivals, $departures));

        // Test Case 4: Only one train
        $arrivals   = [1230];
        $departures = [1245];
        $this->assertEquals(1, $platforms->findMinimumPlatforms($arrivals, $departures));

        // Test Case 5: Random mixed overlapping
        $arrivals   = [900, 905, 915, 1000, 1100];
        $departures = [920, 930, 945, 1005, 1130];
        $this->assertEquals(3, $platforms->findMinimumPlatforms($arrivals, $departures));

        // Test Case 6: Edge case - Empty input
        $arrivals   = [];
        $departures = [];
        $this->assertEquals(0, $platforms->findMinimumPlatforms($arrivals, $departures));
    }
}
