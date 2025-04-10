<?php
namespace App\Heap;

use SplPriorityQueue;

class KClosestPointsToOrigin
{
    public function find(array $arr, int $k): array
    {

        $maxHeap = new SplPriorityQueue;
        foreach ($arr as $v) {
            $x = $v[0];
            $y = $v[1];

            $dist = $x * $x + $y * $y;

            $maxHeap->insert($v, $dist);

            if ($maxHeap->count() > $k) {
                $maxHeap->extract();
            }

        }
        $result = [];
        foreach ($maxHeap as $point) {
            $result[] = $point;
        }
        return $result;
    }
}
