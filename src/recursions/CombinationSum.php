<?php
namespace App\Recursions;

class CombinationSum
{
    public function combinationSum(array $candidates, int $target): array
    {
        $result = [];
        $this->solve(0, $candidates, $target, [], $result);
        return $result;
    }

    public function solve(int $index, array $candidates, int $target, $current, array &$result): void
    {
        if ($target === 0) {
            $result[] = $current;
            return;
        }

        if ($index >= count($candidates) || $target < 0) {
            return;
        }

        $newCurrent = [...$current, $candidates[$index]]; // ensure array
        $this->solve($index, $candidates, $target - $candidates[$index], $newCurrent, $result);

        $this->solve($index + 1, $candidates, $target, $current, $result);

    }
}
