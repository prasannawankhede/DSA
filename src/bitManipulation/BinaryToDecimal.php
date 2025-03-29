<?php
namespace App\BitManipulation;

class BinaryToDecimal
{
    public function convert(String $s): int
    {
        if (empty($s)) {
            return 0;
        }
        $decimal = 0;
        $len     = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            $decimal = $decimal * 2 + ($s[$i] === '1' ? 1 : 0);
        }
        return $decimal;
    }
}
