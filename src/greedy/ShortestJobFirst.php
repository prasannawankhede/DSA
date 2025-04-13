<?php
namespace App\Greedy;

class ShortestJobFirst
{
    public function findAvgWaitingTime($jobTime): int
    {
        $totalWaitingTime = 0;
        $totalTime        = 0;

        sort($jobTime);

        if (count($jobTime) == 1) {
            return 0;
        }

        for ($i = 0; $i < count($jobTime); $i++) {
            $totalWaitingTime += $totalTime;
            $totalTime += $jobTime[$i];
        }

        return intdiv($totalWaitingTime, count($jobTime));
    }
}
