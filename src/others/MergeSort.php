<?php

namespace App;

class MergeSort
{
    public function merge(&$arr, $low, $mid, $high)
    {
        $temp = []; // Temporary array
        $left = $low; // Starting index of the left half of the array
        $right = $mid + 1; // Starting index of the right half of the array

        // Storing elements in the temporary array in a sorted manner
        while ($left <= $mid && $right <= $high) {
            if ($arr[$left] <= $arr[$right]) {
                $temp[] = $arr[$left];
                $left++;
            } else {
                $temp[] = $arr[$right];
                $right++;
            }
        }

        // If elements on the left half are still remaining
        while ($left <= $mid) {
            $temp[] = $arr[$left];
            $left++;
        }

        // If elements on the right half are still remaining
        while ($right <= $high) {
            $temp[] = $arr[$right];
            $right++;
        }

        // Transferring all elements from the temporary array to the original array
        for ($i = $low; $i <= $high; $i++) {
            $arr[$i] = $temp[$i - $low];
        }
    }

    public function mergeSort(&$arr, $low, $high)
    {
        if ($low >= $high) {
            return;
        }
        $mid = floor(($low + $high) / 2);

        // Sorting the left half
        $this->mergeSort($arr, $low, $mid);

        // Sorting the right half
        $this->mergeSort($arr, $mid + 1, $high);

        // Merging the sorted halves
        $this->merge($arr, $low, $mid, $high);
    }
}
