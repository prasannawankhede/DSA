<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\RotateMatrix;

class RotateMatrixTest extends TestCase {
    public function testRotateMatrix() {
        $matrix = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $expected = [
            [7, 4, 1],
            [8, 5, 2],
            [9, 6, 3]
        ];

        $rotateMatrix = new RotateMatrix();
        $rotateMatrix->rotate($matrix);

        $this->assertEquals($expected, $matrix);
    }

    public function testRotateMatrixWithDifferentValues() {
        $matrix = [
            [10, 20, 30, 40],
            [50, 60, 70, 80],
            [90, 100, 110, 120],
            [130, 140, 150, 160]
        ];

        $expected = [
            [130, 90, 50, 10],
            [140, 100, 60, 20],
            [150, 110, 70, 30],
            [160, 120, 80, 40]
        ];

        $rotateMatrix = new RotateMatrix();
        $rotateMatrix->rotate($matrix);

        $this->assertEquals($expected, $matrix);
    }
}
