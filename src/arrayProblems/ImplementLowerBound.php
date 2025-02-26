<?php
namespace App\ArrayProblems;

class ImplementLowerBound
{

    public function floor(array $arr, int $k): int
    {

        $temp = -1;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] <= $k) {

                $temp = $i;
            }
        }
        return $temp;
    }
}
