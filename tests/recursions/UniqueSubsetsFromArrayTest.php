<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\UniqueSubsetsFromArray;

class UniqueSubsetsFromArrayTest extends TestCase
{
    public function testExample1()
    {
        $solver = new UniqueSubsetsFromArray();
        $input = [1, 2, 2];

        $expected = [
            [],
            [1],
            [1, 2],
            [1, 2, 2],
            [2],
            [2, 2]
        ];

        $actual = $solver->solve($input);
        $this->assertSameSorted($expected, $actual);
    }

    public function testSingleElement()
    {
        $solver = new UniqueSubsetsFromArray();
        $input = [0];

        $expected = [
            [],
            [0]
        ];

        $actual = $solver->solve($input);
        $this->assertSameSorted($expected, $actual);
    }

    private function assertSameSorted(array $expected, array $actual): void
    {
        $normalize = function (array $array) {
            foreach ($array as &$subset) {
                sort($subset);
            }
            unset($subset);

            usort($array, fn($a, $b) => $a <=> $b);
            return $array;
        };

        $this->assertSame($normalize($expected), $normalize($actual));
    }
}
