<?php
namespace App\BinarySearch;

class FirstAndLastOccurrence
{

    public function search(array $arr, int $target): array
    {
        return [
            $this->findOccurrence($arr, $target, true),
            $this->findOccurrence($arr, $target, false),
        ];
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
                    $end = $mid - 1; // search left
                } else {
                    $start = $mid + 1; // search right
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
