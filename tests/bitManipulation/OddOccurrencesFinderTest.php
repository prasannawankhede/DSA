<?php
namespace Tests\BitManipulation;

use App\BitManipulation\OddOccurrencesFinder;
use PHPUnit\Framework\TestCase;

class OddOccurrencesFinderTest extends TestCase
{
    public function testFindOddOccurrencesTwoElements()
    {
        $oddFinder = new OddOccurrencesFinder();

        // Test case 1: Two elements appear an odd number of times
        $arr1 = [4, 3, 4, 5, 3, 5, 7, 8];
        $result1 = $oddFinder->findOddOccurrencesTwoElements($arr1);
        sort($result1); // Sorting the result to make sure order does not matter
        $this->assertEquals([7, 8], $result1);

        // Test case 2: Another test case where two odd occurrences are present
        $arr2 = [10, 20, 10, 30, 20, 30, 40, 50];
        $result2 = $oddFinder->findOddOccurrencesTwoElements($arr2);
        sort($result2);
        $this->assertEquals([40, 50], $result2);

        // Test case 3: Edge case with only two odd occurrences
        $arr3 = [1, 2, 1, 3, 2, 5];
        $result3 = $oddFinder->findOddOccurrencesTwoElements($arr3);
        sort($result3);
        $this->assertEquals([3, 5], $result3);

        // Test case 4: No odd occurrences
        $arr4 = [1, 2, 1, 2];
        $result4 = $oddFinder->findOddOccurrencesTwoElements($arr4);
        $this->assertEmpty($result4);  // Expect an empty result as no numbers appear an odd number of times
    }
}
