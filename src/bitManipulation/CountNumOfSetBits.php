<?php
namespace App\BitManipulation;

class CountNumOfSetBits
{
    public function count(int $n): int
    {
        $count = 0;
        while ($n > 0) {
            $n = $n & ($n - 1);
            $count++;
        }
        return $count;
    }
}
