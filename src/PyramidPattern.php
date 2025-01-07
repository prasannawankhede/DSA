<?php

namespace App;

class PyramidPattern {
    public function printPyramid($n, $current = 1) {
        // Base condition: stop when the current row exceeds $n
        if ($current > $n) {
            return;
        }

        // Calculate the number of spaces and stars for the current row
        $spaces = str_repeat(" ", $n - $current);
        $stars = str_repeat("*", 2 * $current - 1);

        // Print the row
        echo $spaces . $stars . "\n";

        // Recursive call for the next row
        $this->printPyramid($n, $current + 1);
    }
}
