<?php
namespace App\Greedy;

class JumpGameII
{
    public function minJumps(array $nums): int
    {
        $jumps      = 0;
        $currentEnd = 0;
        $farthest   = 0;

        for ($i = 0; $i < count($nums) - 1; $i++) {

            $farthest = max($farthest, $i + $nums[$i]);

            if ($i === $currentEnd) {
                $jumps++;
                $currentEnd = $farthest;
            }
        }
        return $jumps;
    }
}
