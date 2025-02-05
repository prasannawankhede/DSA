<?php
namespace app;

class FirstNonRepeatingCharacter
{

    public function char($string)
    {

        $charCount = [];
        $length    = strlen($string);

        // count occurence of each character

        for ($i = 0; $i < $length; $i++) {

            $char = $string[$i];

            if (isset($charCount[$char])) {
                $charCount[$char]++;
            } else {
                $charCount[$char] = 1;
            }
        }

        //return the one with 1 value

        for ($i = 0; $i < $length; $i++) {

            if ($charCount[$string[$i]] === 1) {

                return $string[$i];

            }
        }

        //nulll return

        return null;
    }
}
