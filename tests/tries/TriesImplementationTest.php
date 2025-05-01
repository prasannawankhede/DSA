<?php
namespace Tests\Unit;

use App\Tries\TriesImplementation;
use PHPUnit\Framework\TestCase;

class TriesImplementationTest extends TestCase
{
    private TriesImplementation $trie;

    protected function setUp(): void
    {
        parent::setUp();
        $this->trie = new TriesImplementation();
    }

    public function testInsertAndSearch()
    {
        $this->trie->insert('striver');
        $this->trie->insert('striving');
        $this->trie->insert('string');
        $this->trie->insert('strike');

        $this->assertTrue($this->trie->search('striver'));
        $this->assertTrue($this->trie->search('striving'));
        $this->assertTrue($this->trie->search('string'));
        $this->assertTrue($this->trie->search('strike'));

        $this->assertFalse($this->trie->search('strawberry'));
        $this->assertFalse($this->trie->search('strik'));
    }

    public function testStartsWith()
    {
        $this->trie->insert('striver');
        $this->trie->insert('striving');
        $this->trie->insert('string');
        $this->trie->insert('strike');

        $this->assertTrue($this->trie->startsWith('stri'));
        $this->assertTrue($this->trie->startsWith('str'));
        $this->assertFalse($this->trie->startsWith('straw'));
        $this->assertFalse($this->trie->startsWith('abc'));
    }
}
