<?php

namespace App;

class NegativeNumberReplacer {

    /**
     * Replaces all negative numbers in the array with 0.
     *
     * @param array $arr
     * @return array
     */
    public function replaceNegatives($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < 0) {
                $arr[$i] = 0;
            }
        }

        return $arr;
    }
}
