<?php
namespace Tests\Recursions;

use App\Recursions\BetterStringRecursive;
use PHPUnit\Framework\TestCase;

class BetterStringRecursiveTest extends TestCase
{
    public function testExampleCase()
    {
        $solver = new BetterStringRecursive();
        $result = $solver->getBetterString("gfg", "ggg");

        $this->assertEquals("gfg", $result);
    }

    public function testEqualSubsequenceCountReturnsFirst()
    {
        $solver = new BetterStringRecursive();
        $result = $solver->getBetterString("abc", "acb");

        // Both "abc" and "acb" have same unique subsequences
        $this->assertEquals("abc", $result);
    }

    public function testSecondHasMoreSubsequences()
    {
        $solver = new BetterStringRecursive();
        $result = $solver->getBetterString("aaa", "abc");

        // "abc" has more distinct subsequences than "aaa"
        $this->assertEquals("abc", $result);
    }

    public function testEmptyStrings()
    {
        $solver = new BetterStringRecursive();
        $result = $solver->getBetterString("", "");

        // Both empty, return s1
        $this->assertEquals("", $result);
    }
}
