<?php
namespace App\BitManipulation;

class PowerSet
{
    public function generate(array $arr): array
    {
        $n       = count($arr);
        $ans     = [];
        $subsets = 1 << $n;

        for ($i = 0; $i < $subsets; $i++) {
            $list = [];
            for ($j = 0; $j < $n; $j++) {
                if ($i & (1 << $j)) {
                    $list[] = $arr[$j];
                }
            }
            $ans[] = $list;
        }

        return $ans;
    }
}
