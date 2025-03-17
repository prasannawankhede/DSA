<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\MissingNumber;

class MissingNumberTest extends TestCase
{
    public function testFindMissingNumber()
    {
        $missingNumber = new MissingNumber();

        $this->assertEquals(3, $missingNumber->findMissingNumber([1, 2, 4, 5], 5));
        $this->assertEquals(2, $missingNumber->findMissingNumber([1, 3], 3));
        $this->assertEquals(1, $missingNumber->findMissingNumber([2, 3, 4, 5], 5));
        $this->assertEquals(5, $missingNumber->findMissingNumber([1, 2, 3, 4], 5));
        $this->assertEquals(6, $missingNumber->findMissingNumber([1, 2, 3, 4, 5, 7], 7));
    }
}
