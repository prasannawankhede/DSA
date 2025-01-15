<?php
namespace App;

class FormatPhoneNumber
{

    public function dial($arr)
    {

        if (count($arr) < 10) {
            return;
        }

        $str = "";

        $str = "(" . $arr[0] . $arr[1] . $arr[2] . ")" . " " . "$arr[3]$arr[4]$arr[5]" . "-" . "$arr[6]$arr[7]$arr[8]$arr[9]";

        return $str;

    }
}
