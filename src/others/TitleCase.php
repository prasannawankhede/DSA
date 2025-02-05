<?php

namespace App;

class TitleCase{


public function titleCase($str) {

    $words = explode(' ', strtolower($str));

    foreach ($words as $index => $word) {
        $words[$index] = ucfirst($word);
    }

    return implode(' ', $words);
}


}