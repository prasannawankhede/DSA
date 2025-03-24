<?php

use PHPUnit\Framework\TestCase;
use App\Stacks\CheckForBalancedParanthesis;

class CheckForBalancedParanthesisTest extends TestCase
{
    public function testBalancedParentheses()
    {
        $checker = new CheckForBalancedParanthesis();

        $this->assertTrue($checker->checkBalance("()"));
        $this->assertTrue($checker->checkBalance("{}"));
        $this->assertTrue($checker->checkBalance("[]"));
        $this->assertTrue($checker->checkBalance("{[()]}"));
        $this->assertTrue($checker->checkBalance("(({{[[]]}}))"));
    }

    public function testUnbalancedParentheses()
    {
        $checker = new CheckForBalancedParanthesis();

        $this->assertFalse($checker->checkBalance("("));
        $this->assertFalse($checker->checkBalance(")"));
        $this->assertFalse($checker->checkBalance("{[}]"));
        $this->assertFalse($checker->checkBalance("({[)]}"));
        $this->assertFalse($checker->checkBalance("((())"));
    }

    public function testEmptyString()
    {
        $checker = new CheckForBalancedParanthesis();
        $this->assertTrue($checker->checkBalance(""));
    }
}
