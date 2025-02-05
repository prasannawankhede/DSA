<?php

use App\LargestElementInArray;
use PHPUnit\Framework\TestCase;

class LargestElementInArrayTest extends TestCase
{
    public function testFind()
    {
        $obj = new LargestElementInArray();

        $result = $obj->search([0, 1, 2, 3]);

        // Assert that the largest number is 3
        $this->assertEquals(3, $result);
    }
}
