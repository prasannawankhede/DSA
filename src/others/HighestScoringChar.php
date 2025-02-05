<?php

namespace App;

class HighestScoringChar {

    public function find($string) {

        $alphabet = "abcdefghijklmnopqrstuvwxyz";
        $string = strtolower($string);
        $temp = [];
        $high = null;
        $highestScore = 0;

        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];

            if ($char === ' ' || strpos($alphabet, $char) === false) {
                continue;
            }

            $position = strpos($alphabet, $char) + 1;

            $temp[] = ["char" => $char, "position" => $position];


            if ($position > $highestScore) {
                $highestScore = $position;
                $high = $char;
            }
        }

        return $high;
    }
}
