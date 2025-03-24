<?php
namespace App\Stacks;

class InfixToPostFix
{
    private array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function precedence($c)
    {
        if ($c === "^") {
            return 3;
        }

        if ($c === "*" || $c === "/") {
            return 2;
        }

        if ($c === "+" || $c === "-") {
            return 1;
        }

        return -1;
    }

    public function infixToPost($s)
    {
        $result = "";

        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];

            if (ctype_alnum($c)) {
                $result .= $c;
            } elseif ($c === "(") {
                array_push($this->stack, $c);
            } elseif ($c === ")") {
                while (!empty($this->stack) && end($this->stack) !== "(") {
                    $result .= array_pop($this->stack);
                }
                array_pop($this->stack);
            } else {
                while (!empty($this->stack) && $this->precedence($c) <= $this->precedence(end($this->stack))) {
                    $result .= array_pop($this->stack);
                }
                array_push($this->stack, $c);
            }
        }

        while (!empty($this->stack)) {
            $result .= array_pop($this->stack);
        }

        return $result;
    }
}
