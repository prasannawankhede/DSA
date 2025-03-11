<?php
namespace Test\ArrayProblems;

use App\ArrayProblems\RemoveDuplicatesfromSortedArray;
use PHPUnit\Framework\TestCase;

class RemoveDuplicatesfromSortedArrayTest extends TestCase
{
    public function testRemoveDuplicates()
    {
        $obj = new RemoveDuplicatesfromSortedArray();

        // Case 1: Standard sorted array with duplicates
        $nums   = [1, 1, 2];
        $length = $obj->removeDuplicates($nums);
        $this->assertEquals(2, $length);
        $this->assertEquals([1, 2], array_slice($nums, 0, $length));

        // Case 2: Array with multiple duplicates
        $nums   = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        $length = $obj->removeDuplicates($nums);
        $this->assertEquals(5, $length);
        $this->assertEquals([0, 1, 2, 3, 4], array_slice($nums, 0, $length));
////////////////////////////////////////////
        $nums   = [1, 1, 1, 1, 1, 1, 1];
        $length = $obj->removeDuplicates($nums);

// The correct length should be 1, not 0
        $this->assertEquals(1, $length);

// The first element should be [1], since duplicates are removed
        $this->assertEquals([1], array_slice($nums, 0, $length));
//////////////////////////////////////////////
        // Case 3: No duplicates
        $nums   = [1, 2, 3, 4, 5];
        $length = $obj->removeDuplicates($nums);
        $this->assertEquals(5, $length);
        $this->assertEquals([1, 2, 3, 4, 5], array_slice($nums, 0, $length));

        // Case 4: Single element array
        $nums   = [1];
        $length = $obj->removeDuplicates($nums);
        $this->assertEquals(1, $length);
        $this->assertEquals([1], array_slice($nums, 0, $length));

        // Case 5: Empty array
        $nums   = [];
        $length = $obj->removeDuplicates($nums);
        $this->assertEquals(0, $length);
        $this->assertEquals([], $nums);

// Case 2: Array with some duplicates
        $nums   = [1, 2, 3, 3, 4, 4];
        $length = $obj->removeDuplicates($nums);

// Expected length = 4 (unique elements: 1, 2, 3, 4)
        $this->assertEquals(4, $length);
        $this->assertEquals([1, 2, 3, 4], array_slice($nums, 0, $length));

    }
}
