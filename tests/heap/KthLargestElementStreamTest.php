<?php
namespace Tests\Heap;

use App\Heap\KthLargestElementStream;
use PHPUnit\Framework\TestCase;

class KthLargestElementStreamTest extends TestCase
{
    public function testInitialStream()
    {
        $stream = new KthLargestElementStream(3, [4, 5, 8, 2]);

        $this->assertEquals(4, $stream->add(3));  // [4, 5, 8] => 4
        $this->assertEquals(5, $stream->add(5));  // [5, 5, 8] => 5
        $this->assertEquals(5, $stream->add(10)); // [5, 8, 10] => 5
        $this->assertEquals(8, $stream->add(9));  // [8, 9, 10] => 8
        $this->assertEquals(8, $stream->add(4));  // [8, 9, 10] => 8
    }

    public function testSmallerK()
    {
        $stream = new KthLargestElementStream(1, [2]);
        $this->assertEquals(2, $stream->add(1)); // [2] => 2
        $this->assertEquals(3, $stream->add(3)); // [3] => 3
        $this->assertEquals(5, $stream->add(5)); // [5] => 5
    }

    public function testEmptyInitialStream()
    {
        $stream = new KthLargestElementStream(2, []);

        $this->assertEquals(4, $stream->add(4)); // [4] -> Only 1 element, return 4
        $this->assertEquals(2, $stream->add(2)); // [2, 4] -> 2 is 2nd largest
        $this->assertEquals(4, $stream->add(5)); // [4, 5] -> 4 is 2nd largest
    }

}
