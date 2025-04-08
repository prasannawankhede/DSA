<?php

use App\Recursions\CombinationSum;
use PHPUnit\Framework\TestCase;

class CombinationSumTest extends TestCase
{
    public function testExample1()
    {
        $solver     = new CombinationSum();
        $candidates = [2, 3, 6, 7];
        $target     = 7;

        $expected = [[2, 2, 3], [7]];
        $actual   = $solver->combinationSum($candidates, $target);

        $this->assertSameSorted($expected, $actual);
    }

    public function testExample2()
    {
        $solver     = new CombinationSum();
        $candidates = [2, 3, 5];
        $target     = 8;

        $expected = [[2, 2, 2, 2], [2, 3, 3], [3, 5]];
        $actual   = $solver->combinationSum($candidates, $target);

        $this->assertSameSorted($expected, $actual);
    }

    public function testNoCombination()
    {
        $solver     = new CombinationSum();
        $candidates = [2];
        $target     = 1;

        $expected = [];
        $actual   = $solver->combinationSum($candidates, $target);

        $this->assertSame($expected, $actual);
    }

    private function assertSameSorted(array $expected, array $actual)
    {
        $normalize = function (array $arr): array {
            foreach ($arr as &$combo) {
                if (is_array($combo)) {
                    sort($combo); // Sort each combination
                }
            }
            unset($combo); // Avoid reference side effects

            usort($arr, fn($a, $b) => $a <=> $b); // Sort outer array
            return $arr;
        };

        $this->assertSame($normalize($expected), $normalize($actual));
    }

}
