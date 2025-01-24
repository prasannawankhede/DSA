<?php

namespace App;

class SquarePattern
{
    /**
     * Generates a square pattern of '*' of the given size.
     *
     * @param int $size Size of the square pattern
     * @return string The square pattern as a string
     * @throws \InvalidArgumentException if size is less than or equal to zero
     */
    public function generatePattern(int $size): string
    {
        if ($size <= 0) {
            throw new \InvalidArgumentException("Size must be greater than zero.");
        }

        $pattern = "";
        for ($i = 0; $i < $size; $i++) {
            $pattern .= str_repeat('*', $size) . "\n";
        }
        return rtrim($pattern);
    }
}
