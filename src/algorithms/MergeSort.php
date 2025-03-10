<?php

namespace App\Algorithms;

class MergeSort {
    
    private function merge(array &$arr, int $low, int $mid, int $high): void {
        $temp = [];
        $left = $low;
        $right = $mid + 1;

        // Merge elements into temp array in sorted order
        while ($left <= $mid && $right <= $high) {
            if ($arr[$left] <= $arr[$right]) {
                $temp[] = $arr[$left++];
            } else {
                $temp[] = $arr[$right++];
            }
        }

        // If elements remain in the left half
        while ($left <= $mid) {
            $temp[] = $arr[$left++];
        }

        // If elements remain in the right half
        while ($right <= $high) {
            $temp[] = $arr[$right++];
        }

        // Copy sorted elements back to original array
        for ($i = $low, $j = 0; $i <= $high; $i++, $j++) {
            $arr[$i] = $temp[$j];
        }
    }

    public function sort(array &$arr, int $low, int $high): void {
        if ($low >= $high) return;

        $mid = intdiv($low + $high, 2);
        $this->sort($arr, $low, $mid);
        $this->sort($arr, $mid + 1, $high);
        $this->merge($arr, $low, $mid, $high);
    }
}