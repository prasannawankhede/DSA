<?php
namespace Tests\Stacks;

use App\Stacks\PostfixToInfix;
use PHPUnit\Framework\TestCase;

class PostfixToInfixTest extends TestCase
{
    private PostfixToInfix $converter;

    protected function setUp(): void
    {
        $this->converter = new PostfixToInfix();
    }

    public function testBasicConversion()
    {
        $this->assertEquals("(a+b)", $this->converter->convert("ab+"));
        $this->assertEquals("(x*y)", $this->converter->convert("xy*"));
    }

    public function testComplexExpression()
    {
        $this->assertEquals("(a+(b*c))", $this->converter->convert("abc*+"));
        $this->assertEquals("((a+b)*(c-d))", $this->converter->convert("ab+cd-*"));
        $this->assertEquals("(((a+b)*c)/d)", $this->converter->convert("ab+c*d/"));
    }

    public function testOperatorPrecedence()
    {
        $this->assertEquals("((a-b)*(c+d))", $this->converter->convert("ab-cd+*"));
        $this->assertEquals("((a/(b+c))-d)", $this->converter->convert("abc+/d-"));
    }

    public function testInvalidExpression()
    {
        $converter = new PostfixToInfix();
        $this->assertNull($converter->convert("ab+*")); // ✅ Now expects null
    }

}
