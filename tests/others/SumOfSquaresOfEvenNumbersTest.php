<?php

use PHPUnit\Framework\TestCase;
use App\SumOfSquaresOfEvenNumbers;

class SumOfSquaresOfEvenNumbersTest extends TestCase
{
    public function testAddWithValidInput()
    {
        $sos = new SumOfSquaresOfEvenNumbers();

        // Test with an array containing even and odd numbers
        $array = [1, 2, 3, 4, 5, 6];
        $result = $sos->add($array);
        $this->assertEquals(56, $result); // 2² + 4² + 6² = 4 + 16 + 36 = 56
    }

    public function testAddWithOnlyEvenNumbers()
    {
        $sos = new SumOfSquaresOfEvenNumbers();

        // Test with an array of only even numbers
        $array = [2, 4, 6];
        $result = $sos->add($array);
        $this->assertEquals(56, $result); // 2² + 4² + 6² = 56
    }

    public function testAddWithOnlyOddNumbers()
    {
        $sos = new SumOfSquaresOfEvenNumbers();

        // Test with an array of only odd numbers
        $array = [1, 3, 5];
        $result = $sos->add($array);
        $this->assertEquals(0, $result); // No even numbers, so sum = 0
    }

    public function testAddWithEmptyArray()
    {
        $sos = new SumOfSquaresOfEvenNumbers();

        // Test with an empty array
        $array = [];
        $result = $sos->add($array);
        $this->assertEquals(0, $result); // No numbers, so sum = 0
    }

    public function testAddWithNegativeEvenNumbers()
    {
        $sos = new SumOfSquaresOfEvenNumbers();

        // Test with an array containing negative even numbers
        $array = [-2, -4, -6];
        $result = $sos->add($array);
        $this->assertEquals(56, $result); // (-2)² + (-4)² + (-6)² = 4 + 16 + 36 = 56
    }
}
