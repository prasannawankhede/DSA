<?php

use PHPUnit\Framework\TestCase;
use App\GetSum;

class GetSumTest extends TestCase{

    public function test(){

        $obj = new GetSum();

        $result = $obj->add(3,4);

        $this->assertEquals(7,$result);

    }
}