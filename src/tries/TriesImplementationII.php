<?php
namespace App\Tries;

class Node
{
    private array $links   = [];
    public int $cntEndWith = 0;
    public int $cntPrefix  = 0;

    public function containsKey(string $ch): bool
    {
        return isset($this->links[ord($ch) - ord('a')]);
    }

    public function get(string $ch): ?Node
    {
        return $this->links[ord($ch) - ord('a')] ?? null;
    }

    public function put(string $ch, Node $node): void
    {
        $this->links[ord($ch) - ord('a')] = $node;
    }

    public function increaseEnd(): void
    {
        $this->cntEndWith++;
    }

    public function increasePrefix(): void
    {
        $this->cntPrefix++;
    }

    public function deleteEnd(): void
    {
        $this->cntEndWith--;
    }

    public function reducePrefix(): void
    {
        $this->cntPrefix--;
    }
}

class TriesImplementationII
{
    private Node $root;

    public function __construct()
    {
        $this->root = new Node();
    }

    public function insert(string $word): void
    {
        $node = $this->root;
        $word = strtolower($word);
        for ($i = 0; $i < strlen($word); $i++) {
            $ch = $word[$i];
            if (! $node->containsKey($ch)) {
                $node->put($ch, new Node());
            }
            $node = $node->get($ch);
            $node->increasePrefix();
        }
        $node->increaseEnd();
    }

    public function countWordsEqualTo(string $word): int
    {
        $node = $this->root;
        $word = strtolower($word);
        for ($i = 0; $i < strlen($word); $i++) {
            $ch = $word[$i];
            if ($node->containsKey($ch)) {
                $node = $node->get($ch);
            } else {
                return 0;
            }
        }
        return $node->cntEndWith;
    }

    public function countWordsStartingWith(string $prefix): int
    {
        $node   = $this->root;
        $prefix = strtolower($prefix);
        for ($i = 0; $i < strlen($prefix); $i++) {
            $ch = $prefix[$i];
            if ($node->containsKey($ch)) {
                $node = $node->get($ch);
            } else {
                return 0;
            }
        }
        return $node->cntPrefix;
    }

    public function erase(string $word): void
    {
        $node = $this->root;
        $word = strtolower($word);
        for ($i = 0; $i < strlen($word); $i++) {
            $ch = $word[$i];
            if ($node->containsKey($ch)) {
                $node = $node->get($ch);
                $node->reducePrefix();
            } else {
                return;
            }
        }
        $node->deleteEnd();
    }
}
