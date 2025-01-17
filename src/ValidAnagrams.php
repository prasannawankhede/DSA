<?php
namespace App;

class ValidAnagrams
{

    public function check($str1, $str2)
    {

        if (strlen($str1) !== strlen($str2)) {
            return false;
        }

        $count1 = array_count_values(str_split($str1));
        $count2 = array_count_values(str_split($str2));

        return $count1 == $count2;
    }

}
