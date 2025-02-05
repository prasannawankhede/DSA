<?php

namespace App;

class DisplayLikes {

    public function like($arr) {
        $count = count($arr);

        switch ($count) {
            case 0:
                return "no one likes this";
            case 1:
                return $arr[0] . " likes this";
            case 2:
                return $arr[0] . " and " . $arr[1] . " like this";
            case 3:
                return $arr[0] . ", " . $arr[1] . " and " . $arr[2] . " like this";
            default:
                $remaining = $count - 2;
                return $arr[0] . ", " . $arr[1] . " and " . $remaining . " others like this";
        }
    }
}
