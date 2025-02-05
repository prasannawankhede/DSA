<?php

namespace App;

class MaxProductFinder {

    /**
     * Finds the maximum product of two numbers in an array.
     *
     * @param array $arr
     * @return int
     */
    public function maxProduct($arr) {
        if (count($arr) < 2) {
            return 0;
        }

        // Initialize variables to track the two largest and two smallest numbers
        $max1 = $max2 = PHP_INT_MIN;
        $min1 = $min2 = PHP_INT_MAX;

        foreach ($arr as $num) {
            // Update largest two numbers
            if ($num > $max1) {
                $max2 = $max1;
                $max1 = $num;
            } elseif ($num > $max2) {
                $max2 = $num;
            }

            // Update smallest two numbers
            if ($num < $min1) {
                $min2 = $min1;
                $min1 = $num;
            } elseif ($num < $min2) {
                $min2 = $num;
            }
        }

        // Return the maximum of either the product of two largest or two smallest numbers
        return max($max1 * $max2, $min1 * $min2);
    }
}
