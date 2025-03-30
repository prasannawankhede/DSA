<?php
namespace Tests\BitManipulation;

use App\BitManipulation\ToggleBit;
use PHPUnit\Framework\TestCase;

class ToggleBitTest extends TestCase
{
    public function testToggle()
    {
        $tb = new ToggleBit();

        // Toggling the 1st bit of 5 (0101) -> should become 7 (0111)
        $this->assertEquals(7, $tb->togglt(5, 1));

        // Toggling the 1st bit of 7 (0111) -> should become 5 (0101)
        $this->assertEquals(5, $tb->togglt(7, 1));

        // Toggling the 2nd bit of 0 (0000) -> should become 4 (0100)
        $this->assertEquals(4, $tb->togglt(0, 2));

        // Toggling the 2nd bit of 4 (0100) -> should become 0 (0000)
        $this->assertEquals(0, $tb->togglt(4, 2));

        // Toggling the 3rd bit of 8 (1000) -> should become 0 (0000)
        $this->assertEquals(0, $tb->togglt(8, 3));

        // Toggling the 0th bit of 2 (0010) -> should become 3 (0011)
        $this->assertEquals(3, $tb->togglt(2, 0));
    }
}
