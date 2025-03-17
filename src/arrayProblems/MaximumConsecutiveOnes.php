<?php
namespace App\ArrayProblems;

class MaximumConsecutiveOnes
{

    public function find(array $arr): int
    {
        $max   = 0;
        $count = 0;

        foreach ($arr as $num) {
            if ($num === 1) {
                $count++;
                $max = max($max, $count);
            } else {
                $count = 0;
            }
        }

        return $max;
    }

}
