<?php

use App\LeftRotateArrayOnePlace;
use PHPUnit\Framework\TestCase;

class LeftRotateArrayOnePlaceTest extends TestCase{

    public function testSearch(){

        $obj = new LeftRotateArrayOnePlace();

        $result = $obj->rotate([1,2,3,4,5,6]);

        $this->assertEquals([2,3,4,5,6,1], $result);

    }
}