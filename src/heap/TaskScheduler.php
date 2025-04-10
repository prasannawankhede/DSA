<?php
namespace App\Heap;

use SplPriorityQueue;

class TaskScheduler
{
    public function leastInterval(array $tasks, int $coolingPeriod): int
    {
        if (empty($tasks)) {
            return 0;
        }

        $frequencies = array_count_values($tasks);

        $maxHeap = new SplPriorityQueue;

        // Push [task, frequency] into the heap
        foreach ($frequencies as $task => $count) {
            $maxHeap->insert([$task, $count], $count);
        }

        $time = 0;

        while (! $maxHeap->isEmpty()) {
            $temp = [];
            $slot = $coolingPeriod + 1;

            for ($i = 0; $i < $slot; $i++) {
                if (! $maxHeap->isEmpty()) {
                    [$task, $freq] = $maxHeap->extract();
                    if ($freq - 1 > 0) {
                        $temp[] = [$task, $freq - 1];
                    }
                }

                $time++;

                if ($maxHeap->isEmpty() && empty($temp)) {
                    break;
                }
            }

            foreach ($temp as [$task, $freq]) {
                $maxHeap->insert([$task, $freq], $freq);
            }
        }

        return $time;
    }
}
