<?php
namespace App\Heap;

use SplPriorityQueue;

class FrequencySort
{
    public function sort(array $arr): array
    {
        $frequencyMap = [];
        $result = []; // Initialize result array

        // Count frequencies
        foreach ($arr as $v) {
            $frequencyMap[$v] = ($frequencyMap[$v] ?? 0) + 1;
        }

        $maxHeap = new SplPriorityQueue();

        // Insert into max heap (priority queue)
        foreach ($frequencyMap as $num => $freq) {
            $maxHeap->insert($num, $freq);
        }

        // Build the result array
        while (!$maxHeap->isEmpty()) {
            $num = $maxHeap->extract();
            $result = array_merge($result, array_fill(0, $frequencyMap[$num], $num));
        }

        return $result; // Return the sorted array
    }
}