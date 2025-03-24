<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Stacks\InfixToPostFix;

class InfixToPostFixTest extends TestCase
{
    private InfixToPostFix $converter;

    protected function setUp(): void
    {
        parent::setUp();
        $this->converter = new InfixToPostFix();
    }

    public function testBasicConversion()
    {
        $this->assertEquals('ABC+*D/', $this->converter->infixToPost('A*(B+C)/D'));
    }

    public function testComplexExpression()
    {
        $this->assertEquals('abcd^e-fgh*+^*+i-', $this->converter->infixToPost('a+b*(c^d-e)^(f+g*h)-i'));
    }

    public function testParenthesesHandling()
    {
        $this->assertEquals('ab+cd+*', $this->converter->infixToPost('(a+b)*(c+d)'));
    }

    public function testSingleOperand()
    {
        $this->assertEquals('a', $this->converter->infixToPost('a'));
    }

    public function testOperatorPrecedence()
    {
        $this->assertEquals('ab+c*d/', $this->converter->infixToPost('(a+b)*c/d'));
    }
}
