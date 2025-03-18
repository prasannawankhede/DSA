<?php
namespace App\ArrayProblems;

class MajorityElement
{
    public function findMajorityElement($arr)
    {
        $n       = count($arr);
        $count   = 0;
        $element = null;

        for ($i = 0; $i < $n; $i++) {
            if ($count === 0) {
                $element = $arr[$i];
                $count   = 1;
            } else if ($element === $arr[$i]) {
                $count++;
            } else {
                $count--;
            }
        }

        $count = 0;

        foreach ($arr as $num) {
            if ($element === $num) {
                $count++;
            }
        }

        if ($count > $n / 2) {
            return $element;
        }

        return -1;
    }
}
