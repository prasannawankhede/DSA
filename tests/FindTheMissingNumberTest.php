<?php

use PHPUnit\Framework\TestCase;
use App\FindTheMissingNumber;

class FindTheMissingNumberTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function testFindMissingNumber()
    {
        $finder = new FindTheMissingNumber();

        // Test case 1: Missing number in the middle
        $result = $finder->find([1, 2, 4, 5]);
        $this->assertEquals(3, $result, "Failed for array [1, 2, 4, 5]");

        // Test case 2: Missing number at the beginning
        $result = $finder->find([2, 3, 4, 5]);
        $this->assertEquals(1, $result, "Failed for array [2, 3, 4, 5]");

        // Test case 3: Missing number at the end
        $result = $finder->find([1, 2, 3, 4]);
        $this->assertEquals(5, $result, "Failed for array [1, 2, 3, 4]");

        // Test case 4: Single element array
        $result = $finder->find([2]);
        $this->assertEquals(1, $result, "Failed for array [2]");

        // Test case 5: Empty array
        $result = $finder->find([]);
        $this->assertEquals(1, $result, "Failed for an empty array");

        // Test case 6: Large array
        $result = $finder->find([1, 2, 3, 5, 6, 7, 8, 9, 10]);
        $this->assertEquals(4, $result, "Failed for array [1, 2, 3, 5, 6, 7, 8, 9, 10]");
    }
}
