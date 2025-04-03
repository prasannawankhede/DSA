<?php
namespace App\Recursions;

class StringToInteger
{
    public function convert(String $s): int
    {
        // Remove any leading/trailing whitespace
        $s = trim($s);

        // Base case: empty string
        if (empty($s)) {
            return 0;
        }

        // Handle negative numbers
        $isNegative = false;
        if ($s[0] === '-') {
            $isNegative = true;
            $s          = substr($s, 1);
        } elseif ($s[0] === '+') {
            $s = substr($s, 1);
        }

        // Check if remaining string contains only digits
        if (! ctype_digit($s)) {
            return 0;
        }

        // Base case: single digit
        if (strlen($s) === 1) {
            return $isNegative ? -((int) $s[0]) : (int) $s[0];
        }

        // Recursive case
        $firstDigit      = (int) $s[0];
        $remainingString = substr($s, 1);
        $remainingNumber = $this->convert($remainingString);

        $result = $firstDigit * pow(10, strlen($remainingString)) + $remainingNumber;
        return $isNegative ? -$result : $result;
    }
}
