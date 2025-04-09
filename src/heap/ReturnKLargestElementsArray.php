<?php
namespace App\Heap;

use SplMinHeap;

class ReturnKLargestElementsArray
{
    public function findKElements(array $nums, int $k)
    {
        if ($k <= 0) {
            return [];
        }

        $minHeap = new SplMinHeap;

        foreach ($nums as $num) {
            if ($minHeap->count() < $k) {
                $minHeap->insert($num);
            } elseif ($num > $minHeap->top()) {
                $minHeap->extract();
                $minHeap->insert($num);
            }
        }

        $result = [];
        while (! $minHeap->isEmpty()) {
            $result[] = $minHeap->extract();
        }

        rsort($result);

        return $result;
    }
}
