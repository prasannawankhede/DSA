<?php
namespace App\Greedy;

class MergeIntervals
{
    public function merge(array $intervals): array
    {
        if (empty($intervals)) {
            return [];
        }

        // Sort intervals by their start times
        usort($intervals, function ($a, $b) {
            return $a[0] <=> $b[0];
        });

        $merged       = [];
        $tempInterval = $intervals[0];

        for ($index = 1; $index < count($intervals); $index++) {
            $current = $intervals[$index];

            if ($current[0] <= $tempInterval[1]) {
                // Merge intervals if they overlap
                $tempInterval[1] = max($tempInterval[1], $current[1]);
            } else {
                // No overlap, push the temp interval and move to next
                $merged[]     = $tempInterval;
                $tempInterval = $current;
            }
        }

        // Add the last interval
        $merged[] = $tempInterval;

        return $merged;
    }
}
