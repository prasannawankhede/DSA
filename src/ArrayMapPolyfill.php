<?php

namespace App;

class ArrayMapPolyfill{

    public function map(callable $callback, array $arr){

        $result = [];

        foreach($arr as $a){

            $result[] = $callback($a);
        }

        return $result;

    }
}