<?php

namespace Tests\Heap;

use PHPUnit\Framework\TestCase;
use App\Heap\KClosestPointsToOrigin;

class KClosestPointsToOriginTest extends TestCase
{
    public function testExample1()
    {
        $solution = new KClosestPointsToOrigin();
        $points = [[1, 3], [-2, 2]];
        $k = 1;

        $expected = [[-2, 2]];
        $result = $solution->find($points, $k);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    public function testWhenKEqualsPointsCount()
    {
        $solution = new KClosestPointsToOrigin();
        $points = [[3, 3], [5, -1], [-2, 4]];
        $k = 3;

        $expected = [[3, 3], [5, -1], [-2, 4]];
        $result = $solution->find($points, $k);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    public function testWithMultipleClosest()
    {
        $solution = new KClosestPointsToOrigin();
        $points = [[1, 1], [2, 2], [1, -1]];
        $k = 2;

        $expected = [[1, 1], [1, -1]];
        $result = $solution->find($points, $k);

        $this->assertEqualsCanonicalizing($expected, $result);
    }

    public function testWithNegativeCoordinates()
    {
        $solution = new KClosestPointsToOrigin();
        $points = [[-5, -4], [2, -1], [-1, -2]];
        $k = 2;

        $expected = [[2, -1], [-1, -2]];
        $result = $solution->find($points, $k);

        $this->assertEqualsCanonicalizing($expected, $result);
    }
}
