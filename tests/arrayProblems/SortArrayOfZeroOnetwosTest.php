<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SortArrayOfZeroOnetwos;

class SortArrayOfZeroOnetwosTest extends TestCase
{
    private $sorter;

    protected function setUp(): void
    {
        $this->sorter = new SortArrayOfZeroOnetwos();
    }

    /**
     * @dataProvider sortArrDataProvider
     */
    public function testSortArr($arr, $expected)
    {
        $this->sorter->sortArr($arr);
        $this->assertEquals($expected, $arr);
    }

    public static function sortArrDataProvider()
    {
        return [
            [[0, 2, 1, 2, 0], [0, 0, 1, 2, 2]],
            [[2, 1, 0], [0, 1, 2]],
            [[0, 0, 0], [0, 0, 0]],
            [[2, 2, 2], [2, 2, 2]],
            [[1, 1, 1], [1, 1, 1]],
        ];
    }
}
