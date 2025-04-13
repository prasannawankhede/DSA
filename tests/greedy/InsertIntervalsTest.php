<?php
namespace Tests\Greedy;

use App\Greedy\InsertIntervals;
use PHPUnit\Framework\TestCase;

class InsertIntervalsTest extends TestCase
{
    public function testInsertIntoIntervals()
    {
        $insertIntervals = new InsertIntervals();

        $arr       = [[1, 3], [6, 9]];
        $intervals = [2, 5];

        $expected = [[1, 5], [6, 9]];
        $result   = $insertIntervals->find($arr, $intervals);

        $this->assertEquals($expected, $result);
    }

    public function testNoOverlapInsert()
    {
        $insertIntervals = new InsertIntervals();

        $arr       = [[1, 2], [3, 5], [6, 7], [8, 10], [12, 16]];
        $intervals = [4, 8];

        $expected = [[1, 2], [3, 10], [12, 16]];
        $result   = $insertIntervals->find($arr, $intervals);

        $this->assertEquals($expected, $result);
    }
}
