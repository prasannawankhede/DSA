<?php

use PHPUnit\Framework\TestCase;
use App\CartesianProduct;

class CartesianProductTest extends TestCase {

    public function testFindWithValidArrays() {
        $cartesianProduct = new CartesianProduct();

        $arr1 = [1, 2];
        $arr2 = ['a', 'b'];

        $expected = [
            [1, 'a'],
            [1, 'b'],
            [2, 'a'],
            [2, 'b'],
        ];

        $this->assertEquals($expected, $cartesianProduct->find($arr1, $arr2));
    }

    public function testFindWithEmptyFirstArray() {
        $cartesianProduct = new CartesianProduct();

        $arr1 = [];
        $arr2 = ['a', 'b'];

        $expected = [];

        $this->assertEquals($expected, $cartesianProduct->find($arr1, $arr2));
    }

    public function testFindWithEmptySecondArray() {
        $cartesianProduct = new CartesianProduct();

        $arr1 = [1, 2];
        $arr2 = [];

        $expected = [];

        $this->assertEquals($expected, $cartesianProduct->find($arr1, $arr2));
    }

    public function testFindWithBothArraysEmpty() {
        $cartesianProduct = new CartesianProduct();

        $arr1 = [];
        $arr2 = [];

        $expected = [];

        $this->assertEquals($expected, $cartesianProduct->find($arr1, $arr2));
    }
}
