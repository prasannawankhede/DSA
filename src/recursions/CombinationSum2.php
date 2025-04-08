<?php
namespace App\Recursions;

class CombinationSum2
{
    public function combinationSum2(array $candidates, int $target): array
    {
        sort($candidates);
        $result = [];
        $this->solve(0, $candidates, $target, [], $result);
        return $result;
    }

    private function solve(int $index, array $candidates, int $target, array $current, array &$result): void
    {
        if ($target === 0) {
            $result[] = $current;
            return;
        }

        for ($i = $index; $i < count($candidates); $i++) {

            if ($i > $index && $candidates[$i] === $candidates[$i - 1]) {
                continue;
            }

            // If current number is greater than remaining target, break (early pruning)
            if ($candidates[$i] > $target) {
                break;
            }

            $newCurrent = [ ...$current, $candidates[$i]];
            $this->solve($i + 1, $candidates, $target - $candidates[$i], $newCurrent, $result);

        }
    }
}
