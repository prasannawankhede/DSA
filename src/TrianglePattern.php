<?php

namespace App;

class TrianglePattern {
    public function printTriangle($n, $current = 1) {
        // Base condition: stop when the current row exceeds $n
        if ($current > $n) {
            return;
        }

        // Print stars for the current row
        echo str_repeat("*", $current) . "\n";

        // Recursive call for the next row
        $this->printTriangle($n, $current + 1);
    }
}
