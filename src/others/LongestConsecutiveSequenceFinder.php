<?php

namespace App;

class LongestConsecutiveSequenceFinder {

    /**
     * Finds the length of the longest consecutive sequence in an array.
     *
     * @param array $arr
     * @return int
     */
    public function longestConsecutiveSequence($arr) {
        if (count($arr) == 0) {
            return 0;
        }

        // Step 1: Store all elements in a hash set (manual implementation)
        $numSet = [];
        foreach ($arr as $num) {
            $numSet[$num] = true;
        }

        $maxLength = 0;

        // Step 2: Find the longest sequence
        foreach ($arr as $num) {
            // Only check if `num` is the start of a sequence (i.e., num - 1 is not in set)
            if (!isset($numSet[$num - 1])) {
                $currentNum = $num;
                $currentLength = 1;

                // Count the length of the sequence
                while (isset($numSet[$currentNum + 1])) {
                    $currentNum++;
                    $currentLength++;
                }

                $maxLength = max($maxLength, $currentLength);
            }
        }

        return $maxLength;
    }
}
