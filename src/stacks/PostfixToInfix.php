<?php
namespace App\Stacks;

class PostfixToInfix
{

    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function convert(string $s)
    {
        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];

            if (ctype_alnum($c)) {
                array_push($this->stack, $c);
            } else {
                if (count($this->stack) < 2) {
                    return null; // Return null for invalid expressions
                }

                $top1 = array_pop($this->stack);
                $top2 = array_pop($this->stack);

                $expr = "(" . $top2 . $c . $top1 . ")";
                array_push($this->stack, $expr);
            }
        }

        return count($this->stack) === 1 ? array_pop($this->stack) : null; // Return null if the expression is invalid
    }

}
