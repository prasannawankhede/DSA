<?php
namespace App\BinarySearch;

class OrderAgnosticBinarySearch
{
    public function search(array $arr, int $target): int
    {
        if (empty($arr)) {
            return -1;
        }

        $start = 0;
        $end   = count($arr) - 1;

        $isAscending = $arr[$start] < $arr[$end];

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            if ($arr[$mid] === $target) {
                return $mid;
            }

            if ($isAscending) {
                if ($target < $arr[$mid]) {
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            } else {
                if ($target > $arr[$mid]) {
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            }
        }

        return -1;
    }
}
