<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SetMatrixZeros;

class SetMatrixZerosTest extends TestCase
{
    public function testSetZero()
    {
        $matrix = [
            [1, 1, 1],
            [1, 0, 1],
            [1, 1, 1]
        ];

        $expected = [
            [1, 0, 1],
            [0, 0, 0],
            [1, 0, 1]
        ];

        $setMatrixZeros = new SetMatrixZeros();
        $setMatrixZeros->setZero($matrix);

        $this->assertEquals($expected, $matrix);
    }

    public function testSetZeroWithMultipleZeros()
    {
        $matrix = [
            [0, 1, 2],
            [3, 4, 0],
            [5, 6, 7]
        ];

        $expected = [
            [0, 0, 0],
            [0, 0, 0],
            [0, 6, 0]
        ];

        $setMatrixZeros = new SetMatrixZeros();
        $setMatrixZeros->setZero($matrix);

        $this->assertEquals($expected, $matrix);
    }
}
