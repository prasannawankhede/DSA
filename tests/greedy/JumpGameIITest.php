<?php

use App\Greedy\JumpGameII;
use PHPUnit\Framework\TestCase;

class JumpGameIITest extends TestCase
{
    public function testMinJumps()
    {
        $game = new JumpGameII();

        $this->assertSame(2, $game->minJumps([2, 3, 1, 1, 4])); // Minimum 2 jumps
        $this->assertSame(2, $game->minJumps([2, 3, 0, 1, 4])); // Minimum 2 jumps
        $this->assertSame(0, $game->minJumps([0]));             // Already there
        $this->assertSame(1, $game->minJumps([1, 1]));          // One jump needed
        $this->assertSame(3, $game->minJumps([1, 2, 1, 1, 1])); // Minimum 3 jumps
    }
}
