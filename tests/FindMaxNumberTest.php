<?php

use PHPUnit\Framework\TestCase;
use App\FindMaxNumber;

class FindMaxNumberTest extends TestCase {
    public function testFindMaxWithPositiveNumbers() {
        $obj = new FindMaxNumber();
        $this->assertEquals(10, $obj->findMax([1, 2, 3, 10, 5]));
    }

    public function testFindMaxWithNegativeNumbers() {
        $obj = new FindMaxNumber();
        $this->assertEquals(-1, $obj->findMax([-10, -5, -3, -1]));
    }

    public function testFindMaxWithMixedNumbers() {
        $obj = new FindMaxNumber();
        $this->assertEquals(20, $obj->findMax([-10, 0, 5, 20, -3]));
    }

    public function testFindMaxWithSingleElement() {
        $obj = new FindMaxNumber();
        $this->assertEquals(42, $obj->findMax([42]));
    }

    public function testFindMaxWithEmptyArray() {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("The array cannot be empty.");

        $obj = new FindMaxNumber();
        $obj->findMax([]);
    }
}
