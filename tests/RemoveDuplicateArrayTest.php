<?php

use  App\RemoveDuplicateArray;
use PHPUnit\Framework\TestCase;

class RemoveDuplicateArrayTest extends TestCase{

    public function testremove(){
        $obj = new RemoveDuplicateArray();

    $result = $obj->remove([1,1,2,2,3,3]);

    $this->assertEquals(3,$result);
    }
}