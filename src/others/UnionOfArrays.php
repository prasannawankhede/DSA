<?php

namespace App;

class UnionOfArrays
{
    public function union(array $arr1, array $arr2): array
    {
        $i = 0;
        $j = 0;
        $union = [];
        $n = count($arr1);
        $m = count($arr2);

        while ($i < $n && $j < $m) {
            if ($arr1[$i] <= $arr2[$j]) {
                if (empty($union) || end($union) != $arr1[$i]) {
                    $union[] = $arr1[$i];
                }
                $i++;
            } else {
                if (empty($union) || end($union) != $arr2[$j]) {
                    $union[] = $arr2[$j];
                }
                $j++;
            }
        }

        while ($i < $n) {
            if (empty($union) || end($union) != $arr1[$i]) {
                $union[] = $arr1[$i];
            }
            $i++;
        }

        while ($j < $m) {
            if (empty($union) || end($union) != $arr2[$j]) {
                $union[] = $arr2[$j];
            }
            $j++;
        }

        return $union;
    }
}
