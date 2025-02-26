<?php

namespace App\ArrayProblems;

class CeilFloorFinder
{
    public function findCeilAndFloor(array $arr, int $x): array
    {
        $floor = -1;
        $ceil = -1;

        foreach ($arr as $num) {
            if ($num <= $x && ($floor == -1 || $num > $floor)) {
                $floor = $num; // Update floor to the largest smaller or equal number
            }

            if ($num >= $x && ($ceil == -1 || $num < $ceil)) {
                $ceil = $num; // Update ceil to the smallest greater or equal number
            }
        }

        return [$floor, $ceil];
    }
}
