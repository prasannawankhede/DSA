<?php

namespace App\others;

class MaxSubarraySumFinder {

    /**
     * Finds the contiguous subarray with the largest sum.
     *
     * @param array $nums
     * @return int
     */
    public function findMaxSubarraySum(array $nums): int {
        if (empty($nums)) {
            return 0;
        }

        $maxSum = $nums[0];
        $currentSum = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            $currentSum = max($nums[$i], $currentSum + $nums[$i]);
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum;
    }
}
