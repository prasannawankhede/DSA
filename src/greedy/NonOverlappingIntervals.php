<?php
namespace App\Greedy;

class NonOverlappingIntervals
{
    public function find(array $intervals): int
    {
        if (empty($intervals)) {
            return 0;
        }

        usort($intervals, function ($a, $b) {
            return $a[0] <=> $b[0]; // Sorting by start time
        });

        $count       = 0;
        $lastEndTime = $intervals[0][1];

        for ($i = 1; $i < count($intervals); $i++) {
            if ($intervals[$i][0] >= $lastEndTime) {
                $count++;
                $lastEndTime = $intervals[$i][1];
            }
        }

        return count($intervals) - $count - 1;
    }
}
