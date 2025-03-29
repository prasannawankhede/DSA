<?php
namespace App\BitManipulation;

class SwapNum
{
    public function swap(int &$a, &$b): void
    {
        $a = $a ^ $b;
        $b = $a ^ $b;
        $a = $a ^ $b;
    }
}
