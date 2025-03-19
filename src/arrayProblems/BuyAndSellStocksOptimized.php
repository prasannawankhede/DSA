<?php
namespace App\ArrayProblems;

class BuyAndSellStocksOptimized
{

    public function stocks($arr)
    {
        if (count($arr) <= 1) {
            return 0;
        }

        $minPrice  = PHP_INT_MAX;
        $maxProfit = 0;

        for ($i = 0; $i < count($arr); $i++) {

            if ($arr[$i] < $minPrice) {
                $minPrice = $arr[$i];
            }

            $profit = $arr[$i] - $minPrice;

            if ($profit > $maxProfit) {
                $maxProfit = $profit;
            }
        }
        return $maxProfit;
    }
}
