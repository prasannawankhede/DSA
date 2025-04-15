<?php
namespace App\BinaryTrees;

class AllTraversals
{
    public function allInOneTraversal($root)
    {
        if ($root === null) {
            return;
        }

        $stack = [];
        array_push($stack, ['node' => $root, 'num' => 1]);

        $preorder  = [];
        $inorder   = [];
        $postorder = [];

        while (! empty($stack)) {

            $top  = array_pop($stack);
            $node = $top['node'];
            $num  = $top['num'];

            if ($num === 1) {
                $preorder[] = $node->data;
                $top['num'] = 2;
                array_push($stack, $top);

                if ($node->left !== null) {
                    array_push($stack, ['node' => $node->left, 'num' => 1]);
                }

            } elseif ($num === 2) {
                $inorder[]  = $node->data;
                $top['num'] = 3;
                array_push($stack, $top);

                if ($node->right !== null) {
                    array_push($stack, ['node' => $node->right, 'num' => 1]);
                }

            } else {
                $postorder[] = $node->data;
            }

        }
        echo "Preorder: " . implode(' ', $preorder) . PHP_EOL;
        echo "Inorder: " . implode(' ', $inorder) . PHP_EOL;
        echo "Postorder: " . implode(' ', $postorder) . PHP_EOL;

    }
}
