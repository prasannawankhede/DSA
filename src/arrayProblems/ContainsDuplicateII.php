<?php
namespace App\arrayProblems;

class ContainsDuplicateII
{

    public function find(array $arr, int $k)
    {
        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if (($arr[$i] === $arr[$j]) && ($j - $i <= $k)) {

                    return true;

                }
            }
        }
        return false;

    }
}
