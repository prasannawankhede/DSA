<?php
namespace Tests\Strings;

use App\Strings\ReverseWords;
use PHPUnit\Framework\TestCase;

class ReverseWordsTest extends TestCase
{
    private ReverseWords $reverser;

    protected function setUp(): void
    {
        $this->reverser = new ReverseWords();
    }

    public function testBasicCase()
    {
        $this->assertSame('world hello', $this->reverser->reverse('  hello   world  '));
    }

    public function testSingleWord()
    {
        $this->assertSame('hello', $this->reverser->reverse('   hello   '));
    }

    public function testEmptyString()
    {
        $this->assertSame('', $this->reverser->reverse('     '));
    }

    public function testMultipleSpacesBetweenWords()
    {
        $this->assertSame('fine is this', $this->reverser->reverse('  this   is   fine  '));
    }

    public function testNoExtraSpaces()
    {
        $this->assertSame('c b a', $this->reverser->reverse('a b c'));
    }

    public function testTabAndNewlineIgnored()
    {
        $this->assertSame('c b a', $this->reverser->reverse("  a   b   c\n"));
    }
}
