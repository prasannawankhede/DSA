<?php
namespace App\Strings;

class ReverseWords
{
    public function reverse(string $s): string
    {
        $n     = strlen($s);
        $i     = 0;
        $words = [];

        while ($i < $n) {
            // Skip all whitespace characters
            while ($i < $n && ctype_space($s[$i])) {
                $i++;
            }

            $start = $i;

            while ($i < $n && ! ctype_space($s[$i])) {
                $i++;
            }

            if ($start < $i) {
                $words[] = substr($s, $start, $i - $start);
            }
        }

        $result = '';
        for ($j = count($words) - 1; $j >= 0; $j--) {
            $result .= $words[$j];
            if ($j > 0) {
                $result .= ' ';
            }
        }

        return $result;
    }

}
