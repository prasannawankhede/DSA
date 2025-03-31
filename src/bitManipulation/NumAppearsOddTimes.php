<?php
namespace App\BitManipulation;

class NumAppearsOddTimes
{
    public function find(array $arr): int
    {

        $xor = 0;

        for ($i = 0; $i < count($arr); $i++) {

            $xor = $xor ^ $arr[$i];
        }
        return $xor;
    }
}
