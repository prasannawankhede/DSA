<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\ArrayRotator;

class ArrayRotatorTest extends TestCase {

    public function testRotateLeftByTwo() {
        $rotator = new ArrayRotator();
        $arr = [1, 2, 3, 4, 5];
        $rotator->rotateLeft($arr, 2);
        $this->assertEquals([3, 4, 5, 1, 2], $arr);
    }

    public function testRotateLeftByZero() {
        $rotator = new ArrayRotator();
        $arr = [1, 2, 3, 4, 5];
        $rotator->rotateLeft($arr, 0);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
    }

    public function testRotateLeftByArrayLength() {
        $rotator = new ArrayRotator();
        $arr = [1, 2, 3, 4, 5];
        $rotator->rotateLeft($arr, 5);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
    }

    public function testRotateLeftByMoreThanArrayLength() {
        $rotator = new ArrayRotator();
        $arr = [1, 2, 3, 4, 5];
        $rotator->rotateLeft($arr, 7); // Equivalent to rotating by 2
        $this->assertEquals([3, 4, 5, 1, 2], $arr);
    }

    public function testRotateEmptyArray() {
        $rotator = new ArrayRotator();
        $arr = [];
        $rotator->rotateLeft($arr, 3);
        $this->assertEquals([], $arr);
    }
}
