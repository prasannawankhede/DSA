<?php
namespace Tests\BitManipulation;

use App\BitManipulation\NumAppearsOddTimes;
use PHPUnit\Framework\TestCase;

class NumAppearsOddTimesTest extends TestCase
{
    public function testFind()
    {
        $finder = new NumAppearsOddTimes();

        // Test cases
        $this->assertEquals(3, $finder->find([1, 2, 3, 2, 3, 1, 3])); // 3 appears odd times
        $this->assertEquals(5, $finder->find([5, 7, 7])); // 5 appears odd times
        $this->assertEquals(9, $finder->find([9])); // Single element
        $this->assertEquals(0, $finder->find([])); // Empty array
        $this->assertEquals(8, $finder->find([2, 2, 8, 4, 4])); // 8 appears once
    }
}
