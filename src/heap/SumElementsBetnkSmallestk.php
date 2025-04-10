<?php
namespace App\Heap;

use SplPriorityQueue;

class SumElementsBetnkSmallestk
{
    public function findSumBetwnK(array $arr, int $k1, int $k2)
    {
        $first  = $this->kinfKTH($arr, $k1);
        $second = $this->kinfKTH($arr, $k2);
        $sum    = 0;

        foreach ($arr as $v) {
            if ($v > $first && $v < $second) {
                $sum += $v;
            }
        }

        return $sum;
    }

    public function kinfKTH(array $arr, $k): int
    {
        $maxHeap = new SplPriorityQueue;

        foreach ($arr as $v) {
            $maxHeap->insert($v, $v);

            if ($maxHeap->count() > $k) {
                $maxHeap->extract();
            }
        }

        return $maxHeap->extract();
    }
}
