<?php
namespace App\BinaryTrees;

class NodesAtDistanceK
{
    public function kDistanceNodes($root, $target, $K)
    {
        $result = [];
        $this->findNodes($root, $target, $K, $result);
        return $result;
    }

    private function findNodes($node, $target, $K, &$result)
    {
        if ($node === null) {
            return -1;
        }

        if ($node->data === $target) {
            $this->subtreeAdd($node, $K, $result);
            return 0;
        }

        $dl = $this->findNodes($node->left, $target, $K, $result);
        if ($dl !== -1) {
            if ($dl + 1 === $K) {
                $result[] = $node->data;
            } else { /**dl + 1 steps to reach the current node from the target.

                1 more step to move to the right child.
                
                So the remaining distance: K - (dl + 1) - 1 = K - dl - 2. */
                $this->subtreeAdd($node->right, $K - $dl - 2, $result);
            }
            return $dl + 1;
        }

        $dr = $this->findNodes($node->right, $target, $K, $result);
        if ($dr !== -1) {
            if ($dr + 1 === $K) {
                $result[] = $node->data;
            } else {
                $this->subtreeAdd($node->left, $K - $dr - 2, $result);
            }
            return $dr + 1;
        }

        return -1;
    }

    private function subtreeAdd($node, $K, &$result)
    {
        if ($node === null || $K < 0) {
            return;
        }

        if ($K === 0) {
            $result[] = $node->data;
            return;
        }

        $this->subtreeAdd($node->left, $K - 1, $result);
        $this->subtreeAdd($node->right, $K - 1, $result);
    }
}
