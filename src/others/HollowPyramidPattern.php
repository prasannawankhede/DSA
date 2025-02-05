<?php

namespace App;

class HollowPyramidPattern
{
    /**
     * Generates a hollow pyramid pattern of '*' of the given size.
     *
     * @param int $size Height of the pyramid
     * @return string The hollow pyramid pattern as a string
     * @throws \InvalidArgumentException if size is less than or equal to zero
     */
    public function generatePattern(int $size): string
    {
        if ($size <= 0) {
            throw new \InvalidArgumentException("Size must be greater than zero.");
        }

        $pattern = "";

        for ($i = 1; $i <= $size; $i++) {
            // Add spaces for alignment
            $pattern .= str_repeat(' ', $size - $i);

            // Add stars and spaces for the hollow effect
            if ($i == 1) {
                $pattern .= "*\n";
            } elseif ($i == $size) {
                $pattern .= str_repeat('*', 2 * $size - 1) . "\n";
            } else {
                $pattern .= '*' . str_repeat(' ', 2 * $i - 3) . '*' . "\n";
            }
        }

        return rtrim($pattern);
    }
}
