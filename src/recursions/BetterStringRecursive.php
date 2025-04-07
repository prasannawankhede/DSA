<?php
namespace App\Recursions;

class BetterStringRecursive
{
    public function getBetterString(string $s1, string $s2): string
    {
        $count1 = $this->countDistinctSubsequences($s1);
        $count2 = $this->countDistinctSubsequences($s2);

        return ($count1 >= $count2) ? $s1 : $s2;
    }

    private function countDistinctSubsequences(string $s): int
    {
        $subsequences = [];
        $this->generate($s, 0, "", $subsequences);

        $unique = array_unique($subsequences);
        return count($unique);
    }

    private function generate(string $s, int $index, string $current, array &$result): void
    {
        if ($index === strlen($s)) {
            $result[] = $current;
            return;
        }

        // Include current character
        $this->generate($s, $index + 1, $current . $s[$index], $result);

        // Exclude current character
        $this->generate($s, $index + 1, $current, $result);
    }
}
