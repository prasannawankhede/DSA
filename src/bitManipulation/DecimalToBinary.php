<?php
namespace App\BitManipulation;

class DecimalToBinary
{
    public function convert(int $x): string
    {
        if ($x === 0) {
            return '0';
        }

        $res = "";

        while ($x > 0) {
            $res .= ($x % 2 === 1) ? '1' : '0';
            $x = intdiv($x, 2);
        }

        return strrev($res);
    }
}
