<?php

namespace App;

class CountOccurrences {

    public function count($line, $char) {
        // Validate input
        if (strlen($char) !== 1) {
            throw new \InvalidArgumentException("The 'char' parameter must be a single character.");
        }

        $count = 0;

        // Iterate through the string
        for ($i = 0; $i < strlen($line); $i++) {
            // Check if the current character matches
            if ($line[$i] === $char) {
                $count++;
            }
        }

        return $count;
    }
}
