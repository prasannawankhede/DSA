<?php
namespace App\Stacks;

class PreFixToPostFix
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function convert(String $s)
    {
        $n = strlen($s);
        for ($i = $n - 1; $i >= 0; $i--) {
            $c = $s[$i];

            if (ctype_alnum($c)) {
                array_push($this->stack, $c);
            } else {
                if (count($this->stack) < 2) {
                    return null;
                }
                $top1 = array_pop($this->stack);
                $top2 = array_pop($this->stack);

                $exp = $top1 . $top2 . $c;
                array_push($this->stack, $exp);
            }
        }
        return count($this->stack) === 1 ? array_pop($this->stack) : null;
    }
}
