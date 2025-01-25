<?php

namespace App;

class UniqueSquarePattern
{
    /**
     * Generates a hollow square pattern of '*' of the given size.
     *
     * @param int $size Size of the square pattern
     * @return string The hollow square pattern as a string
     * @throws \InvalidArgumentException if size is less than or equal to zero
     */
    public function generateHollowPattern(int $size): string
    {
        if ($size <= 0) {
            throw new \InvalidArgumentException("Size must be greater than zero.");
        }

        $pattern = "";
        
        // Top row
        $pattern .= str_repeat('*', $size) . "\n";
        
        // Middle rows (hollow)
        for ($i = 0; $i < $size - 2; $i++) {
            $pattern .= '*' . str_repeat(' ', $size - 2) . '*' . "\n";
        }
        
        // Bottom row (if size > 1)
        if ($size > 1) {
            $pattern .= str_repeat('*', $size);
        }

        // Remove the last newline for the case when size is 1
        if ($size === 1) {
            return rtrim($pattern, "\n");
        }

        return $pattern;
    }
}
