<?php
namespace App\Heap;

use SplMinHeap;

class SortAKSortedArray
{
    public function sort(array $nums, int $k): array
    {
        $minHeap = new SplMinHeap();
        $result  = [];

        foreach ($nums as $num) {
            $minHeap->insert($num);

            // When heap size exceeds k, we've found the next smallest element
            if ($minHeap->count() > $k + 1) {
                $result[] = $minHeap->extract();
            }
        }

        // Extract remaining elements from heap
        while (! $minHeap->isEmpty()) {
            $result[] = $minHeap->extract();
        }
        return $result;
    }
}
