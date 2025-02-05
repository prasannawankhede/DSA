<?php

use PHPUnit\Framework\TestCase;
use App\HollowDiamondPattern;

class HollowDiamondPatternTest extends TestCase
{
    public function testDiamondOfSize1()
    {
        $pattern = new HollowDiamondPattern();
        $result = $pattern->generate(1);
        $expected = "*";
        $this->assertEquals($expected, $result);
    }

    public function testDiamondOfSize3()
    {
        $pattern = new HollowDiamondPattern();
        $result = $pattern->generate(3);
        $expected = "  *\n * *\n*   *\n * *\n  *";
        $this->assertEquals($expected, $result);
    }

}