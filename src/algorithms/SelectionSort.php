<?php

namespace App\Algorithms;

class SelectionSort
{
    public function sort(array $arr): array
    {
        $n = count($arr);

        for ($i = 0; $i <= $n - 2; $i++) {
            $mini = $i;

            for ($j = $i + 1; $j <= $n - 1; $j++) {
                if ($arr[$j] < $arr[$mini]) {
                    $mini = $j;
                }
            }

            $temp = $arr[$mini];
            $arr[$mini] = $arr[$i];
            $arr[$i] = $temp;
        }

        return $arr;
    }
}