<?php
namespace App;

class HollowDiamondPattern
{
    public function generate(int $n): string
    {
        if ($n < 1) {
            return '';
        }

        $diamond = [];

        // Upper half (including the center row)
        for ($i = 0; $i < $n; $i++) {
            $line = str_repeat(' ', $n - $i - 1); // Leading spaces
            $line .= '*'; // First star
            if ($i > 0) {
                $line .= str_repeat(' ', 2 * $i - 1) . '*'; // Middle spaces and second star
            }
            $diamond[] = $line;
        }

        // Lower half (excluding the center row)
        for ($i = $n - 2; $i >= 0; $i--) {
            $diamond[] = $diamond[$i];
        }

        return implode("\n", $diamond);
    }
}
