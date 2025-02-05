<?php

use PHPUnit\Framework\TestCase;
use App\PlainTheArrayNested;

class PlainTheArrayNestedTest extends TestCase {
    public function test() {
        $obj = new PlainTheArrayNested();
        $result = $obj->do([1, [2, 3], [4, 5, [6]]]);

        $this->assertEquals([1,2,3,4,5,6], $result);
    }
}
