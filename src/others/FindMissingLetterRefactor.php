<?php
namespace App;

class FindMissingLetterRefactor
{
    public function give(array $arr): string
    {
        $alphabet = range('A', 'Z');

        $arr = array_map('strtoupper', $arr);

        $startPoint = array_search($arr[0], $alphabet);

        foreach ($arr as $index => $char) {
            if ($alphabet[$startPoint + $index] !== $char) {
                return $alphabet[$startPoint + $index];
            }
        }

        return '';
    }
}
