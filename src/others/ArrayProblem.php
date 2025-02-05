<?php

namespace App;

class ArrayProblem {

    /**
     * Sums all even numbers in an array.
     *
     * @param array $arr
     * @return int
     */
    public function sumEvenNumbers($arr) {
        $sum = 0;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                $sum += $arr[$i];
            }
        }

        return $sum;
    }
}
