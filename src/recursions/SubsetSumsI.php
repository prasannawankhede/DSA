<?php
namespace App\Recursions;

class SubsetSumsI
{
    public function solve(array $arr): array
    {
        $result = [];
        $this->generate(0, $arr, 0, $result);
        sort($result);
        return $result;
    }

    public function generate(int $index, array $arr, int $sum, array &$result): void
    {
        if ($index === count($arr)) {
            $result[] = $sum;
            return;
        }

        $this->generate($index + 1, $arr, $sum + $arr[$index], $result);
        $this->generate($index + 1, $arr, $sum, $result);
    }
}
