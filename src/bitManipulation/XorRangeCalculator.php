<?php
namespace App\BitManipulation;

class XorRangeCalculator
{
    private function xorUpto(int $n): int
    {
        if ($n == 0) {
            return 0;
        }
        $mod = $n % 4;
        if ($mod == 0) {
            return $n;
        } elseif ($mod == 1) {
            return 1;
        } elseif ($mod == 2) {
            return $n + 1;
        } else { // $mod == 3
            return 0;
        }
    }

    public function xorRange(int $L, int $R): int
    {
        return $this->xorUpto($R) ^ $this->xorUpto($L - 1);
    }
}
