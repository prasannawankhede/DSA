<?php

namespace App;

class VowelCounter {

    public function countVowels($string) {
        // Add accented vowels to the list
        $vowels = ['a', 'e', 'i', 'o', 'u', 'à', 'è', 'ì', 'ò', 'ù'];
        $count = 0;
        
        // Convert the string to lowercase to make it case-insensitive (using mbstring for multibyte support)
        $string = mb_strtolower($string, 'UTF-8');
        
        // Loop through each character of the string
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vowels)) {
                $count++;
            }
        }
        
        return $count;
    }
}
