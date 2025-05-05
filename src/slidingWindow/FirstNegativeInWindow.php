<?php
namespace App\SlidingWindow;

class FirstNegativeInWindow
{
    public function firstNegatives($arr, $k)
    {
        $n        = count($arr);
        $i        = 0;
        $j        = 0;
        $negative = [];
        $result   = [];

        while ($j < $n) {

            if ($arr[$j] < 0) {
                $negative[] = $arr[$j];
            }

            if ($j - $i + 1 < $k) {
                $j++;
            } else if ($j - $i + 1 === $k) {

                if (! empty($negative)) {
                    $result[] = $negative[0];
                } else {
                    $result[] = 0;
                }

                if (! empty($negative) && $arr[$i] === $negative[0]) {
                    array_shift($negative);
                }
                $j++;
                $i++;

            }
        }
        return $result;
    }
}
