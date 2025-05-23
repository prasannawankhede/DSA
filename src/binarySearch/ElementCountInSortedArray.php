<?php
namespace App\BinarySearch;

class ElementCountInSortedArray
{
    public function count(array $arr, int $target): int
    {
        $first = $this->findOccurrence($arr, $target, true);
        if ($first === -1) {
            return 0;
        }

        $last = $this->findOccurrence($arr, $target, false);

        return $last - $first + 1;
    }

    private function findOccurrence(array $arr, int $target, bool $findFirst): int
    {
        $start  = 0;
        $end    = count($arr) - 1;
        $result = -1;

        while ($start <= $end) {
            $mid = (int) (($start + $end) / 2);

            if ($arr[$mid] === $target) {
                $result = $mid;
                if ($findFirst) {
                    $end = $mid - 1;
                } else {
                    $start = $mid + 1;
                }
            } elseif ($target < $arr[$mid]) {
                $end = $mid - 1;
            } else {
                $start = $mid + 1;
            }
        }

        return $result;
    }
}
