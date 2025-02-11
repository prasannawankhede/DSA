<?php

namespace Tests\arrayProblems;

use App\arrayProblems\ProductOfArrayExceptSelf;
use PHPUnit\Framework\TestCase;

class ProductOfArrayExceptSelfTest extends TestCase
{
    public function testProd()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [1, 2, 3, 4];
        $result = $obj->product($arr);
        $this->assertEquals([24, 12, 8, 6], $result);
    }
    
    public function testEmptyArray()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [];
        $result = $obj->product($arr);
        $this->assertEquals([], $result);
    }
    
    public function testSingleElement()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [5];
        // Conventionally, the product of no elements (i.e., the product of elements except self) is 1.
        $result = $obj->product($arr);
        $this->assertEquals([1], $result);
    }
    
    public function testArrayWithZero()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [1, 2, 0, 4];
        // Expected:
        // index 0: 2 * 0 * 4 = 0,
        // index 1: 1 * 0 * 4 = 0,
        // index 2: 1 * 2 * 4 = 8,
        // index 3: 1 * 2 * 0 = 0.
        $result = $obj->product($arr);
        $this->assertEquals([0, 0, 8, 0], $result);
    }
    
    public function testArrayWithNegatives()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [-1, 2, -3, 4];
        // Expected:
        // index 0: 2 * (-3) * 4 = -24,
        // index 1: (-1) * (-3) * 4 = 12,
        // index 2: (-1) * 2 * 4 = -8,
        // index 3: (-1) * 2 * (-3) = 6.
        $result = $obj->product($arr);
        $this->assertEquals([-24, 12, -8, 6], $result);
    }
    
    public function testArrayWithDuplicates()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [2, 2, 3, 3];
        // Expected:
        // index 0: 2 * 3 * 3 = 18,
        // index 1: 2 * 3 * 3 = 18,
        // index 2: 2 * 2 * 3 = 12,
        // index 3: 2 * 2 * 3 = 12.
        $result = $obj->product($arr);
        $this->assertEquals([18, 18, 12, 12], $result);
    }
    
    public function testAllZeros()
    {
        $obj = new ProductOfArrayExceptSelf();
        $arr = [0, 0, 0];
        // Expected: each index is 0 (0 multiplied by any number is 0)
        $result = $obj->product($arr);
        $this->assertEquals([0, 0, 0], $result);
    }
}
