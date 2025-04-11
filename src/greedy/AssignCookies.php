<?php
namespace App\Greedy;

class AssignCookies
{
    public function satisfyGreed(array $greed, array $children)
    {
        $g = count($greed);
        $c = count($children);

        $count = 0;
        $l     = 0;
        $r     = 0;
        sort($greed);
        sort($children);

        while ($l < $g && $r < $c) {

            if ($greed[$l] <= $children[$r]) {
                $count++;
                $l++;
            }
            $r++;

        }
        return $count;
    }
}
