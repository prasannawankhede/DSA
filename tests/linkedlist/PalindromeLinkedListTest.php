<?php
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\PalindromeLinkedList;
use App\LinkedList\LLNode;

class PalindromeLinkedListTest extends TestCase
{
    private function buildList(array $values): ?LLNode
    {
        if (empty($values)) {
            return null;
        }
        $head = new LLNode(array_shift($values));
        $current = $head;
        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }
        return $head;
    }

    public function testPalindromeEvenLength(): void
    {
        $list = $this->buildList([1, 2, 2, 1]);
        $palindromeChecker = new PalindromeLinkedList();
        $this->assertTrue($palindromeChecker->isPalindrome($list));
    }

    public function testPalindromeOddLength(): void
    {
        $list = $this->buildList([1, 2, 3, 2, 1]);
        $palindromeChecker = new PalindromeLinkedList();
        $this->assertTrue($palindromeChecker->isPalindrome($list));
    }

    public function testNotPalindrome(): void
    {
        $list = $this->buildList([1, 2, 3, 4, 5]);
        $palindromeChecker = new PalindromeLinkedList();
        $this->assertFalse($palindromeChecker->isPalindrome($list));
    }

    public function testSingleNode(): void
    {
        $list = $this->buildList([1]);
        $palindromeChecker = new PalindromeLinkedList();
        $this->assertTrue($palindromeChecker->isPalindrome($list));
    }

    public function testEmptyList(): void
    {
        $list = $this->buildList([]);
        $palindromeChecker = new PalindromeLinkedList();
        $this->assertTrue($palindromeChecker->isPalindrome($list));
    }
}
