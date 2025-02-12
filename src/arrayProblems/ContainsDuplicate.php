<?php
namespace App\arrayProblems;

class ContainsDuplicate
{

    public function remove($arr)
    {

        for ($i = 0; $i < count($arr); $i++) {

            for ($j = $i + 1; $j < count($arr); $j++) {

                if ($arr[$i] == $arr[$j]) {
                    return true;
                }
            }
        }
        return false;

    }
}
