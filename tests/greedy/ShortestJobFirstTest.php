<?php
namespace Tests\Greedy;

use App\Greedy\ShortestJobFirst;
use PHPUnit\Framework\TestCase;

class ShortestJobFirstTest extends TestCase
{
    public function testFindAvgWaitingTime()
    {
        $jobTimes = [6, 8, 7, 3, 4];

        $shortestJobFirst = new ShortestJobFirst();
        $result           = $shortestJobFirst->findAvgWaitingTime($jobTimes);

        $this->assertEquals(8, $result); // Adjusted expected average waiting time
    }

    public function testFindAvgWaitingTimeWithDifferentJobs()
    {
        $jobTimes = [1, 2, 3, 4, 5];

        $shortestJobFirst = new ShortestJobFirst();
        $result           = $shortestJobFirst->findAvgWaitingTime($jobTimes);

        $this->assertEquals(4, $result); // Adjusted expected average waiting time
    }

    public function testFindAvgWaitingTimeWithSingleJob()
    {
        $jobTimes = [5];

        $shortestJobFirst = new ShortestJobFirst();
        $result           = $shortestJobFirst->findAvgWaitingTime($jobTimes);

        $this->assertEquals(0, $result); // Single job, waiting time is 0
    }

    public function testFindAvgWaitingTimeWithLargeInput()
    {
        $jobTimes = [20, 15, 30, 10, 5, 25];

        $shortestJobFirst = new ShortestJobFirst();
        $result           = $shortestJobFirst->findAvgWaitingTime($jobTimes);

        $this->assertEquals(29, $result); // Adjusted expected average waiting time
    }
}
