<?php
namespace App\ArrayProblems;

class SingleElement
{
    public function getSingleElement(array $arr): int
    {
        $xorr = 0;
        foreach ($arr as $num) {
            $xorr ^= $num; // XOR operation
        }
        return $xorr;
    }
}
