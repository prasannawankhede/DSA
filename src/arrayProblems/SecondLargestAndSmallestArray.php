<?php

namespace App\ArrayProblems;

class SecondLargestAndSmallestArray
{
    public function find(array $arr): ?array
{
    if (count($arr) < 2) {
        return null; // Not enough elements
    }

    $secLargest  = $this->sLargest($arr);
    $secSmallest = $this->sSmallest($arr);

    return ($secLargest === null && $secSmallest === null) ? null : [$secLargest, $secSmallest];
}


    public function sLargest(array $arr): ?int
    {
        if (count($arr) < 2) {
            return null;
        }

        $largest = $arr[0];
        $secL    = null;

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $largest) {
                $secL    = $largest;
                $largest = $arr[$i];
            } elseif ($arr[$i] < $largest && ($secL === null || $arr[$i] > $secL)) {
                $secL = $arr[$i];
            }
        }

        return $secL;
    }

    public function sSmallest(array $arr): ?int
    {
        if (count($arr) < 2) {
            return null;
        }

        $smallest = $arr[0];
        $secS = null;

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $smallest) {
                $secS = $smallest;
                $smallest = $arr[$i];
            } elseif ($arr[$i] > $smallest && ($secS === null || $arr[$i] < $secS)) {
                $secS = $arr[$i];
            }
        }

        return $secS;
    }
}
