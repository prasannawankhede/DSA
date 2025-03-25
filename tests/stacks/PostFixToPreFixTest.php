<?php

namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\PostFixToPreFix;

class PostFixToPreFixTest extends TestCase
{
    private PostFixToPreFix $converter;

    protected function setUp(): void
    {
        $this->converter = new PostFixToPreFix();
    }

    public function testSimpleExpression()
    {
        $this->assertEquals('+ab', $this->converter->convert('ab+'));
    }

    public function testComplexExpression()
    {
        $this->assertEquals('*-A/BC-/AKL', $this->converter->convert('ABC/-AK/L-*'));
    }

    public function testAnotherExpression()
    {
        $this->assertEquals('-+ABC', $this->converter->convert('AB+C-'));
    }

    public function testInvalidExpression()
    {
        $this->assertNull($this->converter->convert('A+'));
    }

    public function testSingleOperand()
    {
        $this->assertEquals('A', $this->converter->convert('A'));
    }
}
