<?php
namespace App\Stacks;

class PrefixToInfixConversion
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function convert(string $s)
{
    $n = strlen($s);
    $this->stack = [];

    for ($i = $n - 1; $i >= 0; $i--) {
        $c = $s[$i];

        if (ctype_alnum($c)) {
            array_push($this->stack, $c);
        } else {
            // Invalid if there aren't at least 2 operands to pop
            if (count($this->stack) < 2) {
                return null;  
            }

            $top1 = array_pop($this->stack);
            $top2 = array_pop($this->stack);

            $exp = "(" . $top1 . $c . $top2 . ")";
            array_push($this->stack, $exp);
        }
    }

    // If more than 1 element remains in the stack, expression is invalid
    return count($this->stack) === 1 ? array_pop($this->stack) : null;
}

}
