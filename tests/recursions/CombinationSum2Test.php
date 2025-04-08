<?php

use App\Recursions\CombinationSum2;
use PHPUnit\Framework\TestCase;

class CombinationSum2Test extends TestCase
{
    public function testExample1()
    {
        $solver     = new CombinationSum2();
        $candidates = [10, 1, 2, 7, 6, 1, 5];
        $target     = 8;

        $expected = [
            [1, 1, 6],
            [1, 2, 5],
            [1, 7],
            [2, 6],
        ];
        $actual = $solver->combinationSum2($candidates, $target);

        $this->assertSameSorted($expected, $actual);
    }

    public function testExample2()
    {
        $solver     = new CombinationSum2();
        $candidates = [2, 5, 2, 1, 2];
        $target     = 5;

        $expected = [
            [1, 2, 2],
            [5],
        ];
        $actual = $solver->combinationSum2($candidates, $target);

        $this->assertSameSorted($expected, $actual);
    }

    public function testNoCombination()
    {
        $solver     = new CombinationSum2();
        $candidates = [3, 4, 5];
        $target     = 2;

        $expected = [];
        $actual   = $solver->combinationSum2($candidates, $target);

        $this->assertSame($expected, $actual);
    }

    public function testAllCandidatesUsedOnce()
    {
        $solver     = new CombinationSum2();
        $candidates = [1, 1, 1, 1, 1];
        $target     = 3;

        $expected = [
            [1, 1, 1]
        ];
        $actual = $solver->combinationSum2($candidates, $target);

        $this->assertSameSorted($expected, $actual);
    }

    private function assertSameSorted(array $expected, array $actual)
    {
        $normalize = function (array $array): array {
            foreach ($array as &$combo) {
                sort($combo);
            }
            unset($combo);
            usort($array, fn($a, $b) => $a <=> $b);
            return $array;
        };

        $this->assertSame($normalize($expected), $normalize($actual));
    }
}
