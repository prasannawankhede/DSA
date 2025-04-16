<?php
namespace App\BinaryTrees;

class ZigZagTraversal
{
    public function zigZag($root)
    {
        if ($root === null) {
            return [];
        }

        $result      = [];
        $queue       = [$root];
        $leftToRight = true;

        while (! empty($queue)) {
            $level = [];
            $size  = count($queue);

            for ($i = 0; $i < $size; $i++) {
                $node = array_shift($queue);

                $level[] = $node->data;

                if ($node->left !== null) {
                    $queue[] = $node->left;
                }

                if ($node->right !== null) {
                    $queue[] = $node->right;
                }
            }

            if (! $leftToRight) {
                $level = array_reverse($level);
            }

            $result      = array_merge($result, $level);
            $leftToRight = ! $leftToRight;
        }
        return $result;

    }
}
