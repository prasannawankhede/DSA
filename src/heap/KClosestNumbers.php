<?php
namespace App\Heap;

use SplPriorityQueue;

class KClosestNumbers
{

    public function findClosest(array $nums, int $k, int $x): array
    {
        $maxHeap = new SplPriorityQueue;

        foreach ($nums as $num) {
            $diff = abs($num - $x);

            $maxHeap->insert($num, $diff);

            if ($maxHeap->count() > $k) {
                $maxHeap->extract();
            }
        }

        $result = [];
        while (! $maxHeap->isEmpty()) {
            $result[] = $maxHeap->extract();
        }

        sort($result);

        return $result;
    }
}
