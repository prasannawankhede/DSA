<?php
namespace App\BitManipulation;

class BitCheck
{
    public function isBitSet(int $n, int $i): bool
    {
        return ($n & (1 << $i)) !== 0;
    }
}
