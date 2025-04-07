<?php

use App\Recursions\GenerateAllBalancedParentheses;
use PHPUnit\Framework\TestCase;

class GenerateAllBalancedParenthesesTest extends TestCase
{
    public function testGenerateWithNEqualsOne()
    {
        $generator = new GenerateAllBalancedParentheses();
        $result    = $generator->solve(1);

        $expected = ['()'];
        $this->assertEquals($expected, $result);
    }

    public function testGenerateWithNEqualsTwo()
    {
        $generator = new GenerateAllBalancedParentheses();
        $result    = $generator->solve(2);

        $expected = ['(())', '()()'];
        sort($result);
        sort($expected);

        $this->assertEquals($expected, $result);
    }

    public function testGenerateWithNEqualsThree()
    {
        $generator = new GenerateAllBalancedParentheses();
        $result    = $generator->solve(3);

        $expected = [
            '((()))',
            '(()())',
            '(())()',
            '()(())',
            '()()()',
        ];

        sort($result);
        sort($expected);

        $this->assertEquals($expected, $result);
    }

    public function testGenerateWithZero()
    {
        $generator = new GenerateAllBalancedParentheses();
        $result    = $generator->solve(0);

        $expected = [''];
        $this->assertEquals($expected, $result);
    }
}
