<?php

namespace App;

class FizzBuzzProblem {

    public function fizz($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 3 == 0 && $arr[$i] % 5 == 0) {
                $arr[$i] = "FizzBuzz";
            } elseif ($arr[$i] % 3 == 0) {
                $arr[$i] = "Fizz";
            } elseif ($arr[$i] % 5 == 0) {
                $arr[$i] = "Buzz";
            }
        }

        return $arr;
    }
}
