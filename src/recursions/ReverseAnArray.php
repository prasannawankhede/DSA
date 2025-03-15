<?php

namespace App\Recursions;

class ReverseAnArray
{
    public function rev(&$arr, $i, $n)
    {
        if ($i >= $n / 2) return;

        // Swap elements
        $temp = $arr[$i];
        $arr[$i] = $arr[$n - $i - 1];
        $arr[$n - $i - 1] = $temp;

        // Recursive call
        $this->rev($arr, $i + 1, $n);
    }
}
