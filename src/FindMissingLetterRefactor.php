<?php
namespace App;

class FindMissingLetterRefactor
{
    public function give(array $arr): string
    {
        $alphabet = range('A', 'Z');

        $isLowerCase = ctype_lower($arr[0]);

        $arr = array_map('strtoupper', $arr);

        $startPoint = array_search($arr[0], $alphabet);

        foreach ($arr as $index => $char) {

            if ($alphabet[$startPoint + $index] !== $char) {

                $missingLetter = $alphabet[$startPoint + $index];
                return $isLowerCase ? strtolower($missingLetter) : $missingLetter;

            }
        }

        return '';
    }
}
