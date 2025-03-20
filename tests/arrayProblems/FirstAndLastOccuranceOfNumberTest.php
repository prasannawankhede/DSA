<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\FirstAndLastOccuranceOfNumber;

class FirstAndLastOccuranceOfNumberTest extends TestCase
{
    private FirstAndLastOccuranceOfNumber $finder;

    protected function setUp(): void
    {
        $this->finder = new FirstAndLastOccuranceOfNumber();
    }

    public function testOccuranceWithMultipleOccurrences()
    {
        $arr = [1, 2, 3, 4, 3, 5, 3, 6];
        $target = 3;
        $expected = [2, 6]; // First at index 2, last at index 6
        $this->assertSame($expected, $this->finder->occurance($arr, $target));
    }

    public function testOccuranceWithSingleOccurrence()
    {
        $arr = [1, 2, 4, 5, 6];
        $target = 4;
        $expected = [2, 2]; // First and last occurrence are the same
        $this->assertSame($expected, $this->finder->occurance($arr, $target));
    }

    public function testOccuranceWithNoOccurrence()
    {
        $arr = [1, 2, 4, 5, 6];
        $target = 3;
        $expected = []; // No occurrence
        $this->assertSame($expected, $this->finder->occurance($arr, $target));
    }

    public function testOccuranceWithAllSameElements()
    {
        $arr = [3, 3, 3, 3, 3];
        $target = 3;
        $expected = [0, 4]; // First at index 0, last at index 4
        $this->assertSame($expected, $this->finder->occurance($arr, $target));
    }

    public function testOccuranceWithEmptyArray()
    {
        $arr = [];
        $target = 3;
        $expected = []; // No elements in the array
        $this->assertSame($expected, $this->finder->occurance($arr, $target));
    }
}
