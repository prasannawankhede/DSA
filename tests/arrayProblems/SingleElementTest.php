<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SingleElement;

class SingleElementTest extends TestCase
{
    public function testGetSingleElement()
    {
        $singleElement = new SingleElement();

        $this->assertEquals(4, $singleElement->getSingleElement([4, 1, 2, 1, 2]));
        $this->assertEquals(7, $singleElement->getSingleElement([2, 3, 2, 3, 7]));
        $this->assertEquals(9, $singleElement->getSingleElement([9]));
        $this->assertEquals(6, $singleElement->getSingleElement([5, 6, 5]));
        $this->assertEquals(10, $singleElement->getSingleElement([10, 3, 3]));
    }
}
