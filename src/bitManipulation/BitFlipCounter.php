<?php
namespace App\BitManipulation;

class BitFlipCounter
{
    public function countFlips(int $a, int $b): int
    {
        $xor = $a ^ $b;
        $count = 0;

        while ($xor) {
            $xor = $xor & ($xor - 1); // Remove rightmost set bit
            $count++;
        }

        return $count;
    }
}
