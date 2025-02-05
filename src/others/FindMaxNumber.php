<?php

namespace App;

class FindMaxNumber {
    public function findMax(array $numbers) {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("The array cannot be empty.");
        }

        $max = $numbers[0];

        foreach ($numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }

        return $max;
    }
}
