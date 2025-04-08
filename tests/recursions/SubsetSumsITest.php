<?php

use App\Recursions\SubsetSumsI;
use PHPUnit\Framework\TestCase;

class SubsetSumsITest extends TestCase
{
    public function testExample1()
    {
        $solver   = new SubsetSumsI();
        $input    = [2, 3];
        $expected = [0, 2, 3, 5];

        $result = $solver->solve($input);
        sort($result);
        sort($expected);
        $this->assertSame($expected, $result);
    }

    public function testExample2()
    {
        $solver   = new SubsetSumsI();
        $input    = [1, 2, 1];
        $expected = [0, 1, 1, 2, 2, 3, 3, 4];

        $result = $solver->solve($input);
        sort($result);
        sort($expected);
        $this->assertSame($expected, $result);
    }

    public function testExample3()
    {
        $solver   = new SubsetSumsI();
        $input    = [5, 6, 7];
        $expected = [0, 5, 6, 7, 11, 12, 13, 18];

        $result = $solver->solve($input);
        sort($result);
        sort($expected);
        $this->assertSame($expected, $result);
    }

    public function testEmptyArray()
    {
        $solver   = new SubsetSumsI();
        $input    = [];
        $expected = [0];

        $result = $solver->solve($input);
        $this->assertSame($expected, $result);
    }
}
