<?php
namespace App\Greedy;

class InsertIntervals
{
    public function find(array $arr, array $intervals): array
    {
        $result = [];
        $i      = 0;
        $n      = count($arr);

        while ($i < $n && $arr[$i][1] < $intervals[0]) {
            array_push($result, $arr[$i]);
            $i++;
        }

        while ($i < $n && $arr[$i][0] <= $intervals[1]) {
            $intervals[0] = min($intervals[0], $arr[$i][0]);
            $intervals[1] = max($intervals[1], $arr[$i][1]);
            $i++;
        }

        array_push($result, $intervals);

        while ($i < $n) {
            array_push($result, $arr[$i]);
            $i++;
        }

        return $result;
    }
}
