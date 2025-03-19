<?php
namespace App\ArrayProblems;

class LongestConsecutiveSequence
{
    public function findLongestSequence($arr)
    {
        if (empty($arr)) {
            return 0;
        }

        $arr = array_unique($arr); // Remove duplicates
        sort($arr); // Sort the array

        $longest = 1;
        $currentStreak = 1;

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] === $arr[$i - 1] + 1) {
                $currentStreak++;
            } else if ($arr[$i] !== $arr[$i - 1]) {
                $longest = max($longest, $currentStreak);
                $currentStreak = 1;
            }
        }

        // Ensure the longest streak is updated after the loop
        return max($longest, $currentStreak);
    }
}