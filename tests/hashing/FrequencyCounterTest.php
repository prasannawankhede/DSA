<?php

namespace Tests\Hashing;

use App\Hashing\FrequencyCounter;
use PHPUnit\Framework\TestCase;

class FrequencyCounterTest extends TestCase
{
    public function testBasicArray()
    {
        $counter = new FrequencyCounter();
        $arr = [10, 5, 10, 15, 10, 5];

        $expected = [
            'highest' => 10,
            'lowest' => 15
        ];

        $this->assertEquals($expected, $counter->findHighestAndLowestFrequencyElements($arr));
    }

    public function testAllElementsSame()
    {
        $counter = new FrequencyCounter();
        $arr = [7, 7, 7, 7, 7];

        $expected = [
            'highest' => 7,
            'lowest' => 7
        ];

        $this->assertEquals($expected, $counter->findHighestAndLowestFrequencyElements($arr));
    }

    public function testUniqueElements()
{
    $counter = new FrequencyCounter();
    $arr = [1, 2, 3, 4, 5];

    $expected = [
        'highest' => 1,
        'lowest' => 1
    ];

    $this->assertEquals($expected, $counter->findHighestAndLowestFrequencyElements($arr));
}

    public function testArrayWithNegativeNumbers()
    {
        $counter = new FrequencyCounter();
        $arr = [-1, -2, -1, -3, -1, -2, -4];

        $expected = [
            'highest' => -1,
            'lowest' => -4
        ];

        $this->assertEquals($expected, $counter->findHighestAndLowestFrequencyElements($arr));
    }

    public function testEmptyArray()
    {
        $counter = new FrequencyCounter();
        $arr = [];

        $expected = [
            'highest' => null,
            'lowest' => null
        ];

        $this->assertEquals($expected, $counter->findHighestAndLowestFrequencyElements($arr));
    }
}