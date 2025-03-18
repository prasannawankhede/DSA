<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\TwoSumOptimalApproach;

class TwoSumOptimalApproachTest extends TestCase
{
    private $twoSum;

    protected function setUp(): void
    {
        $this->twoSum = new TwoSumOptimalApproach();
    }

    /**
     * @dataProvider twoSumDataProvider
     */
    public function testIsTwoSum($n, $arr, $target, $expected)
    {
        $result = $this->twoSum->isTwoSum($n, $arr, $target);
        $this->assertEquals($expected, $result);
    }

    public static function twoSumDataProvider()
    {
        return [
            [4, [2, 7, 11, 15], 9, true],         // 2 + 7 = 9
            [4, [1, 2, 3, 4], 8, false],          // No pair makes 8
            [3, [1, 5, 3], 6, true],             // 1 + 5 = 6
            [5, [0, -1, 2, -3, 1], -2, true],    // -3 + 1 = -2
            [2, [3, 3], 6, true],                // 3 + 3 = 6
        ];
    }
}
