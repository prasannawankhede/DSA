<?php

use PHPUnit\Framework\TestCase;
use App\NegativeNumberReplacer;

class NegativeNumberReplacerTest extends TestCase
{
    private $replacer;

    protected function setUp(): void
    {
        $this->replacer = new NegativeNumberReplacer();
    }

    public function testReplaceNegativesWithMixedNumbers()
    {
        $input = [-5, 3, -1, 7, -2, 4];
        $expected = [0, 3, 0, 7, 0, 4];
        $result = $this->replacer->replaceNegatives($input);

        $this->assertEquals($expected, $result);
    }

    public function testReplaceNegativesWithAllNegativeNumbers()
    {
        $input = [-1, -2, -3, -4];
        $expected = [0, 0, 0, 0];
        $result = $this->replacer->replaceNegatives($input);

        $this->assertEquals($expected, $result);
    }

    public function testReplaceNegativesWithAllPositiveNumbers()
    {
        $input = [1, 2, 3, 4];
        $expected = [1, 2, 3, 4]; // No changes
        $result = $this->replacer->replaceNegatives($input);

        $this->assertEquals($expected, $result);
    }

    public function testReplaceNegativesWithEmptyArray()
    {
        $input = [];
        $expected = [];
        $result = $this->replacer->replaceNegatives($input);

        $this->assertEquals($expected, $result);
    }
}
