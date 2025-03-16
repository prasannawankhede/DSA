<?php
namespace App\Hashing;

class CharacterFrequency
{

    public function getFrequencies(String $s)
    {

        $hash = array_fill(0, 26, 0);

        for ($i = 0; $i < strlen($s); $i++) {

            $index = ord($s[$i]) - ord('a');

            if ($index >= 0 && $index < 26) {
                $hash[$index]++;
            }
        }
        return $hash;
    }
}
///// for UPPERCASE do $s[$i] - ord('A);
/////  for both upper and lower case direct take array size 256 as there are 256 char and simply keep index = ord($s[$i])++;