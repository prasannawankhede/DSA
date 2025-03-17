<?php
namespace App\ArrayProblems;

class MoveZeroesEnd
{

    public function move(array $arr): array
    {
        if (empty($arr)) return $arr;
        $j = -1;
        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {

            if ($arr[$i] === 0) {
                $j = $i;
                break;
            }
        }

        if ($j === -1) return $arr; 

        for ($i = $j + 1; $i < $n; $i++) {

            if ($arr[$i] !== 0) {
                [$arr[$j], $arr[$i]] = [$arr[$i], $arr[$j]];
                $j++;
            }
        }
        return $arr;
    }
}
