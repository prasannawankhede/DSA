<?php
namespace App\Recursions;

class UniqueSubsetsFromArray
{
    private array $rawSubsets = [];
    private array $uniqueSorted = [];

    public function solve(array $input, array $output = []): array
    {
        $this->rawSubsets = [];
        $this->generate($input, $output);
        $this->prepareUniqueSorted();
        return $this->uniqueSorted;
    }

    private function generate(array $input, array $output): void
    {
        if (empty($input)) {
            sort($output); // make subsets uniform for uniqueness
            $this->rawSubsets[] = $output;
            return;
        }

        $ele = array_shift($input);

        // Exclude
        $this->generate($input, $output);

        // Include
        $output[] = $ele;
        $this->generate($input, $output);
    }

    private function prepareUniqueSorted(): void
    {
        $unique = [];

        foreach ($this->rawSubsets as $subset) {
            $key = implode(',', $subset); // key for uniqueness
            $unique[$key] = $subset;
        }

        ksort($unique); // sort keys for consistent order
        $this->uniqueSorted = array_values($unique);
    }
}
