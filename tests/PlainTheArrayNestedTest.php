<?php

use PHPUnit\Framework\TestCase;
use App\PlainTheArrayNested;

class PlainTheArrayNestedTest extends TestCase {
    public function test() {
        $obj = new PlainTheArrayNested();
        $result = $obj->do([[10, 20], [30, 40, [50, 60, [70]]]]);

        $this->assertEquals([10, 20, 30, 40, 50, 60, 70], $result);
    }
}
