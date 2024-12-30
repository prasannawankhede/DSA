<?php
namespace App;

class FibonacciSecquence {

    public function find($n) {
        if ($n <= 0) {
            return [];
        }

        if ($n === 1) {
            return [0]; // Return the first Fibonacci number
        }

        $fib = [0, 1]; // Initialize the first two Fibonacci numbers

        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib; // Return the sequence up to $n
    }
}
