<?php
namespace App\BinarySearch;

class RotationCount
{
    public function count(array $arr): int
    {
        $start = 0;
        $end   = count($arr) - 1;

        while ($start <= $end) {
            // If subarray is already sorted, return the first element's index
            if ($arr[$start] <= $arr[$end]) {
                return $start;
            }

            $mid  = (int) (($start + $end) / 2);
            $next = ($mid + 1) % count($arr);
            $prev = ($mid - 1 + count($arr)) % count($arr);

            // Check if mid is the smallest
            if ($arr[$mid] <= $arr[$next] && $arr[$mid] <= $arr[$prev]) {
                return $mid;
            }

            // Decide whether to go left or right
            if ($arr[$mid] >= $arr[$start]) {
                $start = $mid + 1;
            } else {
                $end = $mid - 1;
            }
        }

        return 0; // fallback, array might not be rotated
    }
}
