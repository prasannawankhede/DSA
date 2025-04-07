<?php

use App\Recursions\LetterCasePermutation;
use PHPUnit\Framework\TestCase;

class LetterCasePermutationTest extends TestCase
{
    public function testLetterCasePermutationWithAlphanumericString()
    {
        $solver = new LetterCasePermutation();
        $input  = "a1b2";
        $output = [];

        $solver->solve($input, '', $output);

        $expected = ["a1b2", "a1B2", "A1b2", "A1B2"];
        sort($output);
        sort($expected);

        $this->assertEquals($expected, $output);
    }

    public function testLetterCasePermutationWithOnlyLetters()
    {
        $solver = new LetterCasePermutation();
        $input  = "ab";
        $output = [];

        $solver->solve($input, '', $output);

        $expected = ["ab", "aB", "Ab", "AB"];
        sort($output);
        sort($expected);

        $this->assertEquals($expected, $output);
    }

    public function testLetterCasePermutationWithOnlyNumbers()
    {
        $solver = new LetterCasePermutation();
        $input  = "123";
        $output = [];

        $solver->solve($input, '', $output);

        $expected = ["123"];
        $this->assertEquals($expected, $output);
    }

    public function testLetterCasePermutationWithEmptyString()
    {
        $solver = new LetterCasePermutation();
        $input  = "";
        $output = [];

        $solver->solve($input, '', $output);

        $expected = [""];
        $this->assertEquals($expected, $output);
    }
}
