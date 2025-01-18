<?php
namespace App;

class HashtagGenerator
{
    public function generate($str)
    {
        // Trim any extra spaces from the input string
        $str = trim($str);

        // If the string is empty after trimming, return false
        if (strlen($str) == 0) {
            return false;
        }

        // Initialize an empty array for the capitalized words
        $capital = [];

        // Split the string into words
        $words = explode(" ", $str);

        // Loop through each word
        foreach ($words as $word) {
            if (strlen($word) > 0) {
                // Capitalize each word and add to the capital array
                $capital[] = ucfirst($word);
            }
        }

        // Concatenate the capitalized words with a hashtag at the beginning
        $hastTag = "#" . implode("", $capital);

        // If the hashtag length exceeds 140 characters, return false
        if (strlen($hastTag) > 140) {
            return false;
        }

        // Return the final hashtag
        return $hastTag;
    }
}
