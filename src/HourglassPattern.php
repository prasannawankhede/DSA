<?php

namespace App;

class HourglassPattern {
    public function printHourglass($n) {
        // Upper half of the hourglass
        for ($i = $n; $i >= 1; $i--) {
            echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
        }

        // Lower half of the hourglass
        for ($i = 2; $i <= $n; $i++) {
            echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
        }
    }
}
