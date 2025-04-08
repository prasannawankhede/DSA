<?php
namespace App\Recursions;

class PrintPhoneLetterCombinations
{
    function letterCombinations($digits)
    {
        if (empty($digits)) {
            return [];
        }

        $digitToLetters = [
            '2' => ['a', 'b', 'c'],
            '3' => ['d', 'e', 'f'],
            '4' => ['g', 'h', 'i'],
            '5' => ['j', 'k', 'l'],
            '6' => ['m', 'n', 'o'],
            '7' => ['p', 'q', 'r', 's'],
            '8' => ['t', 'u', 'v'],
            '9' => ['w', 'x', 'y', 'z'],
        ];

        $result = [];
        $this->backtrack($digits, $digitToLetters, 0, '', $result);
        return $result;
    }

    public function backtrack($digits, $digitToLetters, $index, $current, &$result)
    {
        if (strlen($current) === strlen($digits)) {
            $result[] = $current;
            return;
        }

        $currentDigit = $digits[$index];

        foreach ($digitToLetters[$currentDigit] as $letter) {
            $this->backtrack($digits, $digitToLetters, $index + 1, $current . $letter, $result);
        }
    }
}
