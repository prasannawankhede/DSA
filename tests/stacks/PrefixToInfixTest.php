<?php
namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\PrefixToInfixConversion;

class PrefixToInfixTest extends TestCase
{
    private PrefixToInfixConversion $converter;

    protected function setUp(): void
    {
        $this->converter = new PrefixToInfixConversion();
    }

    public function testBasicConversion()
    {
        $this->assertEquals("(A+B)", $this->converter->convert("+AB"));
        $this->assertEquals("(A-B)", $this->converter->convert("-AB"));
    }

    public function testComplexExpression()
    {
        $this->assertEquals("((A-(B/C))*((A/K)-L))", $this->converter->convert("*-A/BC-/AKL"));
    }

    public function testOperatorPrecedence()
    {
        $this->assertEquals("((A+B)*(C/D))", $this->converter->convert("*+AB/CD"));
        $this->assertEquals("((A/B)+(C*D))", $this->converter->convert("+/AB*CD"));
    }

    public function testSingleOperand()
    {
        $this->assertEquals("A", $this->converter->convert("A"));
    }

    public function testInvalidExpression()
    {
        $this->assertNull($this->converter->convert("+A"));
        $this->assertNull($this->converter->convert("-"));
        $this->assertNull($this->converter->convert("**AB"));
    }
}
