<?php
namespace Tests\Unit;

use App\Tries\TriesImplementationII;
use PHPUnit\Framework\TestCase;

class TriesImplementationIITest extends TestCase
{
    private TriesImplementationII $trie;

    protected function setUp(): void
    {
        parent::setUp();
        $this->trie = new TriesImplementationII();
    }

    public function testInsertAndCountWordsEqualTo()
    {
        $this->trie->insert('apple');
        $this->trie->insert('app');

        $this->assertEquals(1, $this->trie->countWordsEqualTo('apple'));
        $this->assertEquals(1, $this->trie->countWordsEqualTo('app'));
        $this->assertEquals(0, $this->trie->countWordsEqualTo('apples'));
    }

    public function testCountWordsStartingWith()
    {
        $this->trie->insert('apple');
        $this->trie->insert('app');

        $this->assertEquals(2, $this->trie->countWordsStartingWith('app'));
        $this->assertEquals(1, $this->trie->countWordsStartingWith('appl'));
        $this->assertEquals(0, $this->trie->countWordsStartingWith('banana'));
    }

    public function testErase()
    {
        $this->trie->insert('apple');
        $this->trie->insert('app');

        $this->trie->erase('app');

        $this->assertEquals(1, $this->trie->countWordsEqualTo('apple'));
        $this->assertEquals(0, $this->trie->countWordsEqualTo('app'));
        $this->assertEquals(1, $this->trie->countWordsStartingWith('app'));

        $this->trie->erase('apple');

        $this->assertEquals(0, $this->trie->countWordsEqualTo('apple'));
        $this->assertEquals(0, $this->trie->countWordsStartingWith('app'));
    }
}
