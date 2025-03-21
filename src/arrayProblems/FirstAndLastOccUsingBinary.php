<?php
namespace App\ArrayProblems;

class FirstAndLastOccUsingBinary
{
    public function firstOccurance($arr, $target, $n)
    {
        $low   = 0;
        $high  = $n - 1;
        $first = -1;

        while ($low <= $high) {
            $mid = $low + (int)(($high - $low) / 2);

            if ($arr[$mid] === $target) {
                $first = $mid;
                $high  = $mid - 1; // Search in the left half
            } elseif ($arr[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return $first;
    }

    public function lastOccurance($arr, $target, $n)
    {
        $low  = 0;
        $high = $n - 1;
        $last = -1;

        while ($low <= $high) {
            $mid = $low + (int)(($high - $low) / 2);

            if ($arr[$mid] === $target) {
                $last = $mid;
                $low  = $mid + 1; // Search in the right half
            } elseif ($arr[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return $last;
    }

    public function find($arr, $target)
    {
        $n = count($arr);
        $first = $this->firstOccurance($arr, $target, $n);
        $last = $this->lastOccurance($arr, $target, $n);

        return [$first, $last];
    }
}
