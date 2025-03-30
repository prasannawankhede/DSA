<?php
namespace App\BitManipulation;

class ToggleBit
{
    public function togglt(int $n, int $i)
    {
        return $n ^ (1 << $i);
    }
}
