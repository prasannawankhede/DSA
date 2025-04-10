<?php
namespace App\Heap;

use SplMinHeap;

class ConnectRopesMinimiseCost
{
    public function findCost(array $arr): int
    {
        $minHeap   = new SplMinHeap;
        $totalCost = 0;
        foreach ($arr as $a) {
            $minHeap->insert($a);
        }

        while ($minHeap->count() >= 2) {

            $r1   = $minHeap->extract();
            $r2   = $minHeap->extract();
            $cost = $r1 + $r2;
            $totalCost += $cost;
            $minHeap->insert($cost);
        }
        return $totalCost;
    }
}
