<?php
namespace App\Greedy;

class MinimumCoins
{
    public function findCOins(int $value): array
    {
        $coins = [1, 2, 5, 10, 20, 50, 100, 500, 1000];
        $ans   = [];

        for ($i = count($coins) - 1; $i >= 0; $i--) {
            while ($coins[$i] <= $value) {
                $ans[] = $coins[$i];
                $value -= $coins[$i];
            }
        }
        return $ans;
    }

}
