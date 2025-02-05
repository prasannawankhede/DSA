<?php

use PHPUnit\Framework\TestCase;
use App\BubbleSort;

class BubbleSortTest extends TestCase{

    public function testSort(){

        $obj = new BubbleSort();

        $result = $obj->sort([2,1,3,5,8,74]);

        $this->assertEquals([1,2,3,5,8,74],$result);
    }
}