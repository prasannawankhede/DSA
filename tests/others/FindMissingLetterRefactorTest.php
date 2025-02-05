<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FindMissingLetterRefactor;

class FindMissingLetterRefactorTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new FindMissingLetterRefactor();
    }

    public function testUppercaseSequence()
    {
        $this->assertEquals('C', $this->finder->give(['A', 'B', 'D', 'E']));
        $this->assertEquals('G', $this->finder->give(['E', 'F', 'H', 'I']));
    }

    public function testLowercaseInputHandledAsUppercase()
    {
        $this->assertEquals('C', $this->finder->give(['a', 'b', 'd', 'e']));
        $this->assertEquals('G', $this->finder->give(['e', 'f', 'h', 'i']));
    }

    public function testCompleteSequenceNoMissing()
    {
        $this->assertEquals('', $this->finder->give(['A', 'B', 'C', 'D']));
    }

    public function testEdgeCases()
    {
        $this->assertEquals('B', $this->finder->give(['A', 'C']));
        $this->assertEquals('Y', $this->finder->give(['X', 'Z']));
    }
}
