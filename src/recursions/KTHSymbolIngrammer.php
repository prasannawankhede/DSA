<?php
namespace App\Recursions;

class KTHSymbolIngrammer
{
    public function solve(int $n, int $k): int
    {
        if ($n === 1 && $k === 1) {
            return 0;
        }

        $mid = pow(2, $n - 1) / 2;

        if ($k <= $mid) {
            return $this->solve($n - 1, $k);
        } else {
            return 1 - $this->solve($n - 1, $k - $mid);
        }
    }
}