<?php
namespace App\BinaryTrees;

class VerticalOrderTraversal
{
    public function verticalOrder($root)
    {
        if ($root === null) {
            return [];
        }

        $map   = [];
        $queue = [[$root, 0]];

        while (! empty($queue)) {
            [$node, $hd] = array_shift($queue);

            $map[$hd][] = $node->data;

            if ($node->left !== null) {
                $queue[] = [$node->left, $hd - 1];
            }

            if ($node->right !== null) {
                $queue[] = [$node->right, $hd + 1];
            }
        }

        ksort($map);
        $result = [];
        foreach ($map as $m) {
            $result = array_merge($result, $m);
        }

        return $result;
    }
}
