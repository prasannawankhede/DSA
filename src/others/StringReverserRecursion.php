<?php

namespace App;

class StringReverserRecursion
{
    public function reverse(string $input): string
    {
        // Base case: if the string is empty or has only one character, return it
        if (strlen($input) <= 1) {
            return $input;
        }

        // Recursive case: reverse the substring and append the first character at the end
        return $this->reverse(substr($input, 1)) . $input[0];
    }
}
