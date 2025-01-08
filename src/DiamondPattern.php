<?php

namespace App;

class DiamondPattern {
    public function printDiamond($n) {
        // Upper half of the diamond
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
        }

        // Lower half of the diamond
        for ($i = $n - 1; $i >= 1; $i--) {
            echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
        }
    }
}
