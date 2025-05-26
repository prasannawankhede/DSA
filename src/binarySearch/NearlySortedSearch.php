<?php
namespace App\BinarySearch;

class NearlySortedSearch
{
    public function search(array $arr, int $target): int
    {
        $start = 0;
        $end   = count($arr) - 1;

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            // Check mid
            if ($arr[$mid] === $target) {
                return $mid;
            }

            // Check left neighbor
            if ($mid - 1 >= $start && $arr[$mid - 1] === $target) {
                return $mid - 1;
            }

            // Check right neighbor
            if ($mid + 1 <= $end && $arr[$mid + 1] === $target) {
                return $mid + 1;
            }

            // Adjust search space
            if ($target < $arr[$mid]) {
                $end = $mid - 2;
            } else {
                $start = $mid + 2;
            }
        }

        return -1;
    }
}
