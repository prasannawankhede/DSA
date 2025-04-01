<?php
use App\BitManipulation\PowerSet;
use PHPUnit\Framework\TestCase;

class PowerSetTest extends TestCase
{
    public function testGenerate()
    {
        $powerSet = new PowerSet();

        $this->assertEquals([[]], $powerSet->generate([]));

        $this->assertEquals([[], [1]], $powerSet->generate([1]));

        $this->assertEquals(
            [[], [1], [2], [1, 2]],
            $powerSet->generate([1, 2])
        );

        $this->assertEquals(
            [[], [1], [2], [1, 2], [3], [1, 3], [2, 3], [1, 2, 3]],
            $powerSet->generate([1, 2, 3])
        );
    }
}
