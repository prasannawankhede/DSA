<?php
namespace Tests\BitManipulation;

use App\BitManipulation\RemoveLastSetBitRightMost;
use PHPUnit\Framework\TestCase;

class RemoveLastSetBitRightMostTest extends TestCase
{
    public function testRemoveIthBit()
    {
        $rls = new RemoveLastSetBitRightMost();

        // Removing the rightmost set bit of 13 (1101) -> should become 12 (1100)
        $this->assertEquals(12, $rls->removeIthBit(13, 0));

        // Removing the rightmost set bit of 7 (0111) -> should become 6 (0110)
        $this->assertEquals(6, $rls->removeIthBit(7, 0));

        // Removing the rightmost set bit of 10 (1010) -> should become 8 (1000)
        $this->assertEquals(8, $rls->removeIthBit(10, 0));

        // Removing the rightmost set bit of 1 (0001) -> should become 0 (0000)
        $this->assertEquals(0, $rls->removeIthBit(1, 0));

        // Removing the rightmost set bit of 32 (100000) -> should become 0 (000000)
        $this->assertEquals(0, $rls->removeIthBit(32, 0));
    }
}
