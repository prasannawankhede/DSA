<?php
namespace App\Tries;

class Node
{
    private array $links = [];
    private bool $flag   = false;

    public function containsKey(string $ch): bool
    {
        return isset($this->links[ord($ch) - ord('a')]);
    }

    public function put(string $ch, Node $node): void
    {
        $this->links[ord($ch) - ord('a')] = $node;
    }

    public function get(string $ch): ?Node
    {
        return $this->links[ord($ch) - ord('a')] ?? null;
    }

    public function setEnd(): void
    {
        $this->flag = true;
    }

    public function isEnd(): bool
    {
        return $this->flag;
    }
}

class TriesImplementation
{
    private Node $root;

    public function __construct()
    {
        $this->root = new Node();
    }

    public function insert(string $word): void
    {
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $ch = strtolower($word[$i]);
            if (! $node->containsKey($ch)) {
                $node->put($ch, new Node());
            }
            $node = $node->get($ch);
        }
        $node->setEnd();
    }

    public function search(string $word): bool
    {
        $node = $this->root;
        for ($i = 0; $i < strlen($word); $i++) {
            $ch = strtolower($word[$i]);
            if (! $node->containsKey($ch)) {
                return false;
            }
            $node = $node->get($ch);
        }
        return $node->isEnd();
    }

    public function startsWith(string $prefix): bool
    {
        $node = $this->root;
        for ($i = 0; $i < strlen($prefix); $i++) {
            $ch = strtolower($prefix[$i]);
            if (! $node->containsKey($ch)) {
                return false;
            }
            $node = $node->get($ch);
        }
        return true;
    }
}
