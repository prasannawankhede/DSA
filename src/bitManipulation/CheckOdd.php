<?php
namespace App\BitManipulation;

class CheckOdd
{
    public function isOdd(int $n): bool
    {
        return ($n & 1) === 1;
    }
}
