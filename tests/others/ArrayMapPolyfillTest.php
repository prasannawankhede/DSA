<?php

use PHPUnit\Framework\TestCase;
use App\ArrayMapPolyfill;

class ArrayMapPolyfillTest extends TestCase
{
    public function testSingleArray()
    {
        $polyfill = new ArrayMapPolyfill();

        $input = [1, 2, 3, 4];
        $result = $polyfill->map(fn($x) => $x * 2, $input);
        $this->assertEquals([2, 4, 6, 8], $result);
    }

    public function testWithStrings()
    {
        $polyfill = new ArrayMapPolyfill();

        $input = ['apple', 'banana', 'cherry'];
        $result = $polyfill->map(fn($x) => strtoupper($x), $input);
        $this->assertEquals(['APPLE', 'BANANA', 'CHERRY'], $result);
    }
}
