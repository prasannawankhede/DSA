<?php

use PHPUnit\Framework\TestCase;
use App\ArrayFilterPolyfill;

class ArrayFilterPolyfillTest extends TestCase
{
    private $filter;

    protected function setUp(): void
    {
        $this->filter = new ArrayFilterPolyfill();
    }

    public function testFilterEvenNumbers(): void
    {
        $numbers = [1, 2, 3, 4, 5, 6];
        $result = $this->filter->filter($numbers, function ($num) {
            return $num % 2 === 0;
        });

        $this->assertSame([2, 4, 6], $result);
    }

    public function testFilterOddNumbers(): void
    {
        $numbers = [1, 2, 3, 4, 5, 6];
        $result = $this->filter->filter($numbers, function ($num) {
            return $num % 2 !== 0;
        });

        $this->assertSame([1, 3, 5], $result);
    }

    public function testFilterStringsContainingCharacter(): void
    {
        $strings = ['apple', 'banana', 'cherry', 'date'];
        $result = $this->filter->filter($strings, function ($str) {
            return strpos($str, 'a') !== false;
        });

        $this->assertSame(['apple', 'banana', 'date'], $result);
    }

    public function testFilterEmptyArray(): void
    {
        $numbers = [];
        $result = $this->filter->filter($numbers, function ($num) {
            return $num > 0;
        });

        $this->assertSame([], $result);
    }

    public function testFilterWithKeys(): void
    {
        $associativeArray = [
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
        ];

        $result = $this->filter->filter($associativeArray, function ($value, $key) {
            return $key === 'b' || $value > 3;
        });

        $this->assertSame([2, 4], $result);
    }
}
