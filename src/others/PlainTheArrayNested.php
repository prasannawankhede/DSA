<?php

namespace App;

class PlainTheArrayNested {
    public function do($arr) {
        $result = [];
    
        foreach ($arr as $subArr) {
            if (is_array($subArr)) {
                $result = array_merge($result, $this->do($subArr));
            } else {
                $result[] = $subArr;
            }
        }
    
        return $result;
    }
}
