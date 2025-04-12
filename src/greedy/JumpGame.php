<?php
namespace App\Greedy;

class JumpGame
{
    public function canJump(array $nums): bool
    {
        $maxReach = 0;

        for ($i = 0; $i < count($nums); $i++) {
            if ($i > $maxReach) {
                return false;
            }

            $maxReach = max($maxReach, $i + $nums[$i]);
        }
        return true;
    }
}
