<?php
namespace App\BitManipulation;

class ClearBit
{
    public function clear(int $n, int $i)
    {
        return $n & ~(1 << $i);
    }
}
