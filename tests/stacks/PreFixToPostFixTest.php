<?php

namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\PreFixToPostFix;

class PreFixToPostFixTest extends TestCase
{
    private PreFixToPostFix $converter;

    protected function setUp(): void
    {
        $this->converter = new PreFixToPostFix();
    }

    public function testSimpleExpression()
    {
        $this->assertEquals('ab+', $this->converter->convert('+ab'));
    }

    public function testComplexExpression()
    {
        $this->assertEquals('ABC/-AK/L-*', $this->converter->convert('*-A/BC-/AKL'));
    }

    public function testAnotherExpression()
    {
        $this->assertEquals('AB+C-', $this->converter->convert('-+ABC'));
    }

    public function testInvalidExpression()
    {
        $this->assertNull($this->converter->convert('A+'));
    }

    public function testSingleOperand()
    {
        $this->assertEquals('A', $this->converter->convert('A'));
    }

    public function testOperatorOnly()
    {
        $this->assertNull($this->converter->convert('*'));
    }

    public function testUnbalancedExpression()
    {
        $this->assertNull($this->converter->convert('+AB*C'));
    }
}
