<?php
namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\InfixToPrefix;

class InfixToPrefixTest extends TestCase
{
    private InfixToPrefix $converter;

    protected function setUp(): void
    {
        $this->converter = new InfixToPrefix();
    }

    public function testBasicConversion()
    {
        $this->assertEquals("*+ABC", $this->converter->infixToPrefix("(A+B)*C"));
    }

    public function testComplexExpression()
    {
        $this->assertEquals("+A-*BC^DE", $this->converter->infixToPrefix("A+B*C-(D^E)"));
    }

    public function testParenthesesHandling()
    {
        $this->assertEquals("*+AB+CD", $this->converter->infixToPrefix("(A+B)*(C+D)"));
    }

    public function testOperatorPrecedence()
    {
        $this->assertEquals("*A/BC", $this->converter->infixToPrefix("A*(B/C)"));
    }

    public function testSingleOperand()
    {
        $this->assertEquals("A", $this->converter->infixToPrefix("A"));
    }
}
