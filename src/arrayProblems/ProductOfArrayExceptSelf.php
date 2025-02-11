<?php
namespace App\arrayProblems;

class ProductOfArrayExceptSelf
{

    public function product($arr): array
    {
        if (count($arr) < 1) {
            return [];
        }

        $ans = [];

        for ($i = 0; $i < count($arr); $i++) {
            $sum = 1;

            for ($j = 0; $j < count($arr); $j++) {

                if ($i === $j) {
                    continue;
                }
                $sum = $sum * $arr[$j];

            }
            $ans[$i] = $sum;

        }
        return $ans;
    }
}
