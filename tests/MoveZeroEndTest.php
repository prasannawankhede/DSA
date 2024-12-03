<?php

use App\MoveZeroEnd;
use PHPUnit\Framework\TestCase;

class MoveZeroEndTest extends TestCase
{
    public function testMoveZeroToEnd()
    {
        $obj = new MoveZeroEnd();

        $this->assertEquals([1, 3, 12, 0, 0], $obj->move([0, 1, 0, 3, 12]));
        $this->assertEquals([1, 2, 3, 0, 0], $obj->move([1, 2, 3, 0, 0]));
        $this->assertEquals([0, 0, 0], $obj->move([0, 0, 0]));
        $this->assertEquals([1, 2, 3], $obj->move([1, 2, 3]));
        $this->assertEquals([], $obj->move([]));
    }
}
