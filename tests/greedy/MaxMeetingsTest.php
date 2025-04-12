<?php

use App\Greedy\MaxMeetings;
use PHPUnit\Framework\TestCase;

class MaxMeetingsTest extends TestCase
{
    public function testFindMaxMeetings()
    {
        $meeting = new MaxMeetings();

        // Example case
        $start    = [1, 3, 0, 5, 8, 5];
        $end      = [2, 4, 5, 7, 9, 9];
        $expected = [1, 2, 4, 5];

        $this->assertSame($expected, $meeting->findMaxMeetings($start, $end));

        // Test: Only one meeting
        $start    = [1];
        $end      = [2];
        $expected = [1];
        $this->assertSame($expected, $meeting->findMaxMeetings($start, $end));

        // Test: Meetings with overlapping times
        $start    = [1, 1, 1];
        $end      = [3, 2, 4];
        $expected = [2];
        $this->assertSame($expected, $meeting->findMaxMeetings($start, $end));

        // Test: No overlapping
        $start    = [1, 3, 5, 7];
        $end      = [2, 4, 6, 8];
        $expected = [1, 2, 3, 4];
        $this->assertSame($expected, $meeting->findMaxMeetings($start, $end));
    }
}
