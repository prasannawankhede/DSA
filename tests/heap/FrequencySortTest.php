<?php

namespace Tests\Heap;

use PHPUnit\Framework\TestCase;
use App\Heap\FrequencySort;

class FrequencySortTest extends TestCase
{
    public function testBasicExample()
    {
        $fs = new FrequencySort();
        $input = [1, 1, 2, 2, 2, 3];
        $output = $fs->sort($input);

        // 2 occurs 3 times, 1 occurs 2 times, 3 occurs once
        $this->assertEquals([2, 2, 2, 1, 1, 3], $output);
    }

    public function testAllSameElements()
    {
        $fs = new FrequencySort();
        $input = [7, 7, 7, 7];
        $output = $fs->sort($input);

        $this->assertEquals([7, 7, 7, 7], $output);
    }

    public function testAllUnique()
    {
        $fs = new FrequencySort();
        $input = [4, 5, 6, 7];
        $output = $fs->sort($input);

        // Any order is valid since all frequencies are 1
        sort($output);
        $this->assertEquals([4, 5, 6, 7], $output);
    }

    public function testEmptyInput()
    {
        $fs = new FrequencySort();
        $input = [];
        $output = $fs->sort($input);

        $this->assertEquals([], $output);
    }
}
