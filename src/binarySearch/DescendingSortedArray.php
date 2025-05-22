<?php
namespace App\BinarySearch;

class DescendingSortedArray
{
    public function search(array $arr, int $target): int
    {
        $start = 0;
        $end   = count($arr) - 1;

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            if ($arr[$mid] === $target) {
                return $mid;
            }

            if ($target < $arr[$mid]) {
                $start = $mid + 1; // go right
            } else {
                $end = $mid - 1; // go left
            }
        }

        return -1; // not found
    }
}
