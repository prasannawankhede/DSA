<?php
namespace App\BinarySearch;

class SearchInRotatedArray
{
    public function search(array $arr, int $target): int
    {
        $n = count($arr);
        if ($n === 0) {
            return -1;
        }

        if ($n === 1) {
            return $arr[0] === $target ? 0 : -1;
        }

        $pivot = $this->findPivot($arr);

        if ($target >= $arr[0]) {
            return $this->binarySearch($arr, 0, $pivot - 1, $target);
        } else {
            return $this->binarySearch($arr, $pivot, $n - 1, $target);
        }
    }

    private function findPivot(array $arr): int
    {
        $start = 0;
        $end   = count($arr) - 1;

        while ($start <= $end) {
            if ($arr[$start] <= $arr[$end]) {
                return $start;
            }

            $mid  = (int) (($start + $end) / 2);
            $next = ($mid + 1) % count($arr);
            $prev = ($mid - 1 + count($arr)) % count($arr);

            if ($arr[$mid] <= $arr[$next] && $arr[$mid] <= $arr[$prev]) {
                return $mid;
            }

            if ($arr[$mid] >= $arr[$start]) {
                $start = $mid + 1;
            } else {
                $end = $mid - 1;
            }
        }

        return 0; // fallback (if not rotated)
    }

    private function binarySearch(array $arr, int $start, int $end, int $target): int
    {
        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            if ($arr[$mid] === $target) {
                return $mid;
            } elseif ($arr[$mid] < $target) {
                $start = $mid + 1;
            } else {
                $end = $mid - 1;
            }
        }

        return -1;
    }
}
