<?php

namespace App;

class SecondLargestFinder {

    /**
     * Finds the second largest number in the array.
     *
     * @param array $arr
     * @return int|null
     */
    public function findSecondLargest($arr) {
        if (count($arr) < 2) {
            return null; // Not enough elements to find second largest
        }

        $largest = PHP_INT_MIN;
        $secondLargest = PHP_INT_MIN;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] > $largest) {
                $secondLargest = $largest;
                $largest = $arr[$i];
            } elseif ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
                $secondLargest = $arr[$i];
            }
        }

        return $secondLargest == PHP_INT_MIN ? null : $secondLargest;
    }
}
