<?php

use App\SecondLargestElementArray;
use PHPUnit\Framework\TestCase;

class SecondLargestElementArrayTest extends TestCase
{
    public function testFindSecondLargest()
    {
        $obj = new SecondLargestElementArray();

        $this->assertEquals(2, $obj->search([0, 1, 2, 3]));
        $this->assertEquals(10, $obj->search([10, 20, 10]));
        $this->assertNull($obj->search([10])); 
        $this->assertNull($obj->search([]));   
        $this->assertEquals(-3, $obj->search([-5, -4, -3, -2])); 
    }
}
