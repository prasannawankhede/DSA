<?php

namespace App\Hashing;

class FrequencyCounter
{
    public function findHighestAndLowestFrequencyElements(array $arr): array
    {
        if (empty($arr)) {
            return ['highest' => null, 'lowest' => null];
        }

        $frequency = [];

        // Count occurrences of each element
        foreach ($arr as $num) {
            $frequency[$num] = ($frequency[$num] ?? 0) + 1;
        }

        // Find elements with highest and lowest frequency
        $highestFreq = max($frequency);
        $lowestFreq = min($frequency);

        // Get all elements with the highest frequency
        $highestElements = array_keys($frequency, $highestFreq);
        // Get all elements with the lowest frequency
        $lowestElements = array_keys($frequency, $lowestFreq);

        // If all elements have the same frequency, return the smallest element for both
        if ($highestFreq === $lowestFreq) {
            $smallestElement = min($highestElements);
            return [
                'highest' => $smallestElement,
                'lowest' => $smallestElement
            ];
        }

        // Otherwise, return the largest element with the highest frequency
        // and the smallest element with the lowest frequency
        return [
            'highest' => max($highestElements),
            'lowest' => min($lowestElements)
        ];
    }
}