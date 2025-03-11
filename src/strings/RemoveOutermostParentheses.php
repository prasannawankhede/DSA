<?php

namespace App\Strings;

class RemoveOutermostParentheses {
    public function filter(string $s): string {
        $result = "";
        $openCount = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === '(') {
                if ($openCount > 0) { // Skip the outermost '('
                    $result .= '(';
                }
                $openCount++;
            } else {
                $openCount--;
                if ($openCount > 0) { // Skip the outermost ')'
                    $result .= ')';
                }
            }
        }

        return $result;
    }
}
