<?php
namespace App\Algorithms;

class BubbleSortAlgorithm
{
    public function sort(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }

        $n = count($arr);

        for ($i = $n - 1; $i >= 0; $i--) {
            for ($j = 0; $j < $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap elements
                    [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
                }
            }
        }
        return $arr;
    }
}
