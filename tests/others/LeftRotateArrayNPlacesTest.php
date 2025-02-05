<?php

use App\LeftRotateArrayNPlaces;
use PHPUnit\Framework\TestCase;

class LeftRotateArrayNPlacesTest extends TestCase{

    public function testSearch(){

        $obj = new LeftRotateArrayNPlaces();

        $result = $obj->rotate([1,2,3,4,5,6],2);

        $this->assertEquals([3,4,5,6,1,2],$result);
        
    }
}