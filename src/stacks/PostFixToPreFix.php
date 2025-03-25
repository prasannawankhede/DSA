<?php
namespace App\Stacks;

class PostFixToPreFix
{
    private $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function convert(String $s)
    {

        for ($i = 0; $i < strlen($s); $i++) {

            $c = $s[$i];

            if (ctype_alnum($c)) {
                array_push($this->stack, $c);
            } else {
                if (count($this->stack) < 2) {
                    return null;
                }

                $top1 = array_pop($this->stack);
                $top2 = array_pop($this->stack);

                $exp = $c . $top2 . $top1;
                array_push($this->stack, $exp);

            }
        }

        return count($this->stack) === 1 ? array_pop($this->stack) : null;
    }
}
