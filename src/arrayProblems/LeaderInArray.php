<?php

namespace App\ArrayProblems;

class LeaderInArray
{
    public function findLeaders(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }

        $n = count($arr);
        $leaders = [];
        $maxRight = PHP_INT_MIN;

        // Traverse the array from the end to the beginning
        for ($i = $n - 1; $i >= 0; $i--) {
            if ($arr[$i] > $maxRight) {
                $leaders[] = $arr[$i];
                $maxRight = $arr[$i];
            } elseif ($arr[$i] === $maxRight && !in_array($arr[$i], $leaders)) {
                $leaders[] = $arr[$i];
            }
        }

        // Sort the leaders to maintain order from left to right
        sort($leaders);
        return $leaders;
    }
}
