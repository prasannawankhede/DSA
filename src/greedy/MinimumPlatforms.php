<?php
namespace App\Greedy;

class MinimumPlatforms
{
    public function findMinimumPlatforms(array $arrivals, array $departures): int
    {
        sort($arrivals);
        sort($departures);

        $maxCount = 0;
        $count    = 0;

        $i = 0;
        $j = 0;

        while ($i < count($arrivals) && $j < count($departures)) {
            if ($arrivals[$i] < $departures[$j]) {
                $count++;
                $i++;
            } else {
                $j++;
                $count--;
            }
            $maxCount = max($maxCount, $count);
        }
        return $maxCount;
    }
}
