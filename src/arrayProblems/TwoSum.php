<?php
namespace App\arrayProblems;

class TwoSum
{
    public function sum($arr, $target)
    {
        $n = count($arr);

        if ($n < 2) {
            return -1;
        }

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$i] + $arr[$j] == $target) {
                    return [$i, $j];
                }
            }
        }

        return -1;
    }
}
