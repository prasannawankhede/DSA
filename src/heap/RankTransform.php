<?php
namespace App\Heap;

class RankTransform
{
    public function arrayRankTransform(array $arr): array
    {
        $unique = array_unique($arr);
        sort($unique);

        $rankMap = [];
        foreach ($unique as $i => $val) {
            $rankMap[$val] = $i + 1;
        }

        $result = [];
        foreach ($arr as $val) {
            $result[] = $rankMap[$val];
        }

        return $result;
    }

}
