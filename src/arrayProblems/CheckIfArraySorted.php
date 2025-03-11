<?php
namespace App\ArrayProblems;

class CheckIfArraySorted
{

    public function check(array $arr): bool
    {

        if (count($arr) <= 1) {
            return true;
        }

        for ($i = 1; $i < count($arr); $i++) {

            if ($arr[$i] < $arr[$i - 1]) {

                return false;
            }
        }
        return true;
    }
}
