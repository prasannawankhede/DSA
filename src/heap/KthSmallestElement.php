<?php
namespace App\Heap;

use SplPriorityQueue;

class KthSmallestElement
{
    public function findKthSmallest(array $nums, int $k): int
    {

        $maxHeap = new SplPriorityQueue;

        foreach ($nums as $num) {
            $maxHeap->insert($num, $num);

            if ($maxHeap->count() > $k) {
                $maxHeap->extract();
            }
        }

        return $maxHeap->top();
    }
}
