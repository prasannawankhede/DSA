<?php

namespace App;

class RemoveDuplicates {

    public function do($arr) {
        $unique = []; // Array to store unique elements

        foreach ($arr as $value) {
            if (!in_array($value, $unique)) { // Check if the value is already in the unique array
                $unique[] = $value; // Add the value if it's not already in
            }
        }

        return $unique; // Return the array with duplicates removed
    }
}
