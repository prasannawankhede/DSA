<?php
namespace App\Algorithms;

class InsertionSortAlgorithm
{
    public function sort($arr)
    {
        if (empty($arr)) {
            return [];
        }

        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {
            $j = $i;

            while ($j > 0 && $arr[$j - 1] > $arr[$j]) {
                [$arr[$j - 1], $arr[$j]] = [$arr[$j], $arr[$j - 1]];
                $j--;
            }
        }
        return $arr;
    }
}
