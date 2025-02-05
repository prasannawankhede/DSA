<?php

namespace App;

class MajorityElementFinder {

    /**
     * Finds the majority element in the array.
     *
     * @param array $nums
     * @return int|null
     */
    public function findMajorityElement($nums) {
        $count = [];
        $n = count($nums);

        // Count occurrences of each number
        foreach ($nums as $num) {
            $count[$num] = ($count[$num] ?? 0) + 1;
            if ($count[$num] > floor($n / 2)) {
                return $num;
            }
        }

        return null; // No majority element
    }
}
