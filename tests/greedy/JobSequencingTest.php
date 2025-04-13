<?php
namespace Tests\Greedy;

use App\Greedy\JobSequencing;
use PHPUnit\Framework\TestCase;

class JobSequencingTest extends TestCase
{
    public function testMaxProfit()
    {
        $jobs = [
            new JobSequencing(2, 100),
            new JobSequencing(1, 19),
            new JobSequencing(2, 27),
            new JobSequencing(1, 25),
            new JobSequencing(3, 15),
        ];

        $jobSequencing = new JobSequencing(0, 0); // Dummy object to call method
        $result        = $jobSequencing->maxProfit($jobs);

        $this->assertEquals([3, 142], $result);
    }
}
