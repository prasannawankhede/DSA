<?php
namespace Tests\Hashing;

use App\Hashing\HashmapFrequency;
use PHPUnit\Framework\TestCase;

class HashmapFrequencyTest extends TestCase
{
    public function testCountFrequencies()
    {
        $hashmap = new HashmapFrequency(); // Create an instance

        $arr = [1, 2, 3, 2, 1, 3, 3, 3, 2, 1];

        $expected = [
            1 => 3,
            2 => 3,
            3 => 4,
        ];

        $this->assertEquals($expected, $hashmap->count($arr)); // Call method on instance
    }

    public function testEmptyArray()
    {
        $hashmap = new HashmapFrequency(); // Create an instance

        $this->assertEquals([], $hashmap->count([]));
    }

    public function testSingleElementArray()
    {
        $hashmap = new HashmapFrequency(); // Create an instance

        $this->assertEquals([5 => 1], $hashmap->count([5]));
    }

    public function testArrayWithRepeatedSingleValue()
    {
        $hashmap = new HashmapFrequency(); // Create an instance

        $this->assertEquals([7 => 5], $hashmap->count([7, 7, 7, 7, 7]));
    }
}
