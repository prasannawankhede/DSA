<?php

namespace App;

class AllCharactersUnique
{

    public function unique($string)
    {

        $length = strlen($string);

        for ($i = 0; $i < $length; $i++) {

            for ($j = $i + 1; $j < $length; $j++) {

                if ($string[$i] == $string[$j]) {

                    return false;
                }

            }

        }
        return true;
    }

}
