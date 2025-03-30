<?php
namespace App\BitManipulation;

class RemoveLastSetBitRightMost
{
    public function removeIthBit(int $n, int $i)
    {
        return $n & ($n - 1);
    }
}
