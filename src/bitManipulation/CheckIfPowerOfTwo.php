<?php
namespace App\BitManipulation;

class CheckIfPowerOfTwo
{
    public function check(int $n): bool
    {
        return ($n > 0) && ($n & ($n - 1)) === 0;
    }
}
