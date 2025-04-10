<?php
namespace App\Heap;

use SplPriorityQueue;

class TaskScheduler
{
    public function leastInterval(array $tasks, int $coolingPeriod): int
    {
        // If no tasks, return 0 as no time is needed
        if (empty($tasks)) {
            return 0;
        }

        // Count the frequency of each task (e.g., A => 3, B => 2, etc.)
        $frequencies = array_count_values($tasks);

        // Create a max heap using SplPriorityQueue to always process the task with the highest remaining frequency
        $maxHeap = new SplPriorityQueue;

        // Insert each task with its frequency into the max heap
        // The priority is the frequency (higher frequency = higher priority)
        foreach ($frequencies as $task => $count) {
            $maxHeap->insert([$task, $count], $count); // [task, frequency], priority = frequency
        }

        $time = 0; // Total time to execute all tasks

        // Continue processing until all tasks are scheduled
        while (! $maxHeap->isEmpty()) {
            $temp = [];                 // Temporary list to hold tasks that are still pending after this cycle
            $slot = $coolingPeriod + 1; // We can execute at most p+1 tasks before repeating any task

            // Try to fill each of the (coolingPeriod + 1) slots
            for ($i = 0; $i < $slot; $i++) {
                if (! $maxHeap->isEmpty()) {
                    // Get the most frequent task
                    [$task, $freq] = $maxHeap->extract();

                    // Decrease frequency because we've executed it once
                    if ($freq - 1 > 0) {
                        // If task still has remaining instances, add it to temp to be re-added later
                        $temp[] = [$task, $freq - 1];
                    }
                }

                // Increase total time (whether we executed a task or were idle)
                $time++;

                // If both heap and temp are empty, all tasks are done — break early
                if ($maxHeap->isEmpty() && empty($temp)) {
                    break;
                }
            }

            // Push back any tasks that still have remaining counts
            foreach ($temp as [$task, $freq]) {
                $maxHeap->insert([$task, $freq], $freq);
            }
        }

        // Return the total time taken to schedule all tasks
        return $time;
    }
}
