<?php
namespace App\ArrayProblems;

class FirstAndLastOccuranceOfNumber
{
    public function occurance(array $arr, $target): array
    {
        if (empty($arr)) {
            return [];
        }

        $first = -1;
        $last  = -1;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] === $target) {
                if ($first === -1) { // Corrected comparison
                    $first = $i;
                }
                $last = $i; // Updates only when target is found
            }
        }

        return $first === -1 ? [] : [$first, $last];
    }
}
