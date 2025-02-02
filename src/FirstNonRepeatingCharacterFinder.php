<?php

namespace App;

class FirstNonRepeatingCharacterFinder {

    /**
     * Finds the first non-repeating character in a string.
     *
     * @param string $str
     * @return string|null
     */
    public function findFirstNonRepeating($str) {
        $charCount = [];

        // Count occurrences of each character
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            $charCount[$char] = ($charCount[$char] ?? 0) + 1;
        }

        // Find the first character that appears only once
        for ($i = 0; $i < strlen($str); $i++) {
            if ($charCount[$str[$i]] === 1) {
                return $str[$i];
            }
        }

        return null; // No non-repeating character found
    }
}
