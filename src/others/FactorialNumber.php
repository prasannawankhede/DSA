<?php
namespace App;

class FactorialNumber {

    public function find($n) {
        if ($n < 0) {
            throw new \InvalidArgumentException("Negative numbers are not allowed.");
        }

        $result = 1; // Initialize the result to 1

        for ($i = 2; $i <= $n; $i++) {
            $result *= $i; // Multiply result by i
        }

        return $result;
    }
}
