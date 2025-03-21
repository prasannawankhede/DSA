<?php
namespace App\ArrayProblems;

class SearchRotatedSortedArrayI
{

    public function find($arr, $target)
    {
        if (empty($arr)) {
            return -1;
        }

        $n    = count($arr);
        $low  = 0;
        $high = $n - 1;

        while ($low <= $high) {
            $mid = intdiv($low + $high, 2);

            if ($arr[$mid] === $target) {
                return $mid;
            }

            if ($arr[$low] <= $arr[$mid]) {

                if ($arr[$low] <= $target && $target <= $arr[$mid]) {
                    $high = $mid - 1;
                } else {
                    $low = $mid + 1;
                }
            } else {
                if ($arr[$mid] <= $target && $target <= $arr[$high]) {
                    $low = $mid + 1;
                } else {
                    $high = $mid - 1;
                }

            }
        }

        return -1;

    }
}
