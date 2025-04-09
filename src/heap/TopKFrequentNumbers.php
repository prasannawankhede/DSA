<?php
namespace App\Heap;
use SplMinHeap;
class TopKFrequentNumbers
{
    public function topKFrequent(array $nums, int $k): array
    {
        $freqMap = [];

        // Step 1: Count frequency of each number
        foreach ($nums as $num) {
            $freqMap[$num] = ($freqMap[$num] ?? 0) + 1;
        }

        // Step 2: Use a min-heap to keep track of top K elements
        $heap = new class extends SplMinHeap {
            protected function compare($value1, $value2): int
            {
                return $value2['freq'] <=> $value1['freq'];
            }
        };

        // Push elements into the heap
        foreach ($freqMap as $num => $freq) {
            $heap->insert(['num' => $num, 'freq' => $freq]);
            if ($heap->count() > $k) {
                $heap->extract(); // Remove the smallest (in terms of frequency)
            }
        }

        // Step 3: Extract results
        $result = [];
        while (!$heap->isEmpty()) {
            $result[] = $heap->extract()['num'];
        }

        // Step 4: Sort result to match expected test order
        sort($result);

        return $result;
    }
}