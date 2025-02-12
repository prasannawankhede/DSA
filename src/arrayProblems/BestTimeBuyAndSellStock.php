<?php
namespace App\arrayProblems;

class BestTimeBuyAndSellStock
{

    public function stock($arr)
    {

        $n = count($arr);

        $profit = 0;

        for ($i = 0; $i < $n; $i++) {

            for ($j = $i + 1; $j < $n; $j++) {

                $bp        = $arr[$i];
                $sp        = $arr[$j];
                $newProfit = $sp - $bp;

                if ($newProfit > $profit) {

                    $profit = $newProfit;
                }
            }
        }

        return $profit > 0 ? $profit : 0;
    }
}
