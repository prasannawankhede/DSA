<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblem;

class ArrayProblemTest extends TestCase
{
    private $arrayProblem;

    protected function setUp(): void
    {
        $this->arrayProblem = new ArrayProblem();
    }

    public function testSumEvenNumbers()
    {
        $input = [1, 2, 3, 4, 5, 6, 7, 8];
        $expected = 20;  // 2 + 4 + 6 + 8 = 20
        $result = $this->arrayProblem->sumEvenNumbers($input);

        $this->assertEquals($expected, $result);
    }

    public function testSumEvenNumbersWithNoEvenNumbers()
    {
        $input = [1, 3, 5, 7];
        $expected = 0;  // No even numbers
        $result = $this->arrayProblem->sumEvenNumbers($input);

        $this->assertEquals($expected, $result);
    }

    public function testSumEvenNumbersWithEmptyArray()
    {
        $input = [];
        $expected = 0;  // Empty array, sum is 0
        $result = $this->arrayProblem->sumEvenNumbers($input);

        $this->assertEquals($expected, $result);
    }
}
