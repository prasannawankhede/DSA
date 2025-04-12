<?php

use App\Greedy\JumpGame;
use PHPUnit\Framework\TestCase;

class JumpGameTest extends TestCase
{
    public function testCanJump()
    {
        $game = new JumpGame();

        $this->assertTrue($game->canJump([2, 3, 1, 1, 4]));  // Can reach last index
        $this->assertFalse($game->canJump([3, 2, 1, 0, 4])); // Can't reach last index
        $this->assertTrue($game->canJump([0]));              // Already at the end
        $this->assertFalse($game->canJump([0, 2]));          // Can't move from start
        $this->assertTrue($game->canJump([2, 0, 0]));        // Just enough jump
    }
}
