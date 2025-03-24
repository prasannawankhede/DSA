<?php
namespace App\Stacks;

class InfixToPrefix
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

    private function reverseExpression(string $exp): string
    {
        $exp = strrev($exp);
        $reversed = '';

        for ($i = 0; $i < strlen($exp); $i++) {
            if ($exp[$i] === '(') {
                $reversed .= ')';
            } elseif ($exp[$i] === ')') {
                $reversed .= '(';
            } else {
                $reversed .= $exp[$i];
            }
        }
        return $reversed;
    }

    public function infixToPrefix(string $infix): string
    {
        $reversedInfix = $this->reverseExpression($infix);
        $postfix = $this->infixToPostfix($reversedInfix);
        return strrev($postfix);
    }

    private function infixToPostfix(string $s): string
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
                array_pop($this->stack); // Remove '('
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
