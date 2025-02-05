<?php

namespace App;

class HighestScoringWord {

    public function find($sentence) {

        $alphabet = 'abcdefghijklmnopqrstuvwxyz'; // The alphabet
        $sentence = strtolower($sentence); // Ensure case-insensitivity
        $words = explode(" ", $sentence); // Split sentence into words
        $highestScore = 0;
        $highestScoringWord = "";

        foreach ($words as $word) {
            $wordScore = 0;

            // Calculate the score of each word
            foreach (str_split($word) as $char) {
                $wordScore += strpos($alphabet, $char) + 1; // Letter score
            }

            // If the word has a higher score, update the highest scoring word
            if ($wordScore > $highestScore) {
                $highestScore = $wordScore;
                $highestScoringWord = $word;
            }
        }

        return $highestScoringWord;
    }
}
