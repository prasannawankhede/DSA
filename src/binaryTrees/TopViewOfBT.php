<?php
namespace App\BinaryTrees;

class TopViewOfBT
{
    public function topView($root)
    {
        if ($root === null) {
            return [];
        }

        $queue = [[$root, 0]];
        $map   = [];

        while (! empty($queue)) {
            [$node, $hd] = array_shift($queue);

            if (! isset($map[$hd])) {
                $map[$hd] = $node->data;
            }
            if ($node->left !== null) {
                $queue[] = [$node->left, $hd - 1];
            }
            if ($node->right !== null) {
                $queue[] = [$node->right, $hd + 1];
            }
        }
        ksort($map);
        return array_values($map);

    }
}
