<?php
namespace App\Stacks;

class CheckForBalancedParanthesis
{
    private array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function checkBalance(string $s): bool
    {
        $this->stack = [];

        foreach (str_split($s) as $char) {
            if ($char === '(' || $char === '[' || $char === '{') {
                array_push($this->stack, $char);
            } else {
                if (empty($this->stack)) {
                    return false;
                }

                $top = array_pop($this->stack);

                if (($char === ')' && $top !== '(') ||
                    ($char === ']' && $top !== '[') ||
                    ($char === '}' && $top !== '{')) {
                    return false;
                }
            }
        }

        return empty($this->stack);
    }
}
