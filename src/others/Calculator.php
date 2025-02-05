<?php

namespace App;

class Calculator {

    public function do($a, $b, $operator) {
        switch ($operator) {
            case "+":
                return $a + $b;

            case "-":
                return $a - $b;

            case "*":
                return $a * $b;

            case "/":
                if ($b == 0) {
                    return "Division by zero error!";
                }
                return $a / $b;

            default:
                return "Please enter a valid operator: +, -, *, /";
        }
    }
}
