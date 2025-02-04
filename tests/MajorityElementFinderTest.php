<?php

use PHPUnit\Framework\TestCase;
use App\MajorityElementFinder;

class MajorityElementFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new MajorityElementFinder();
    }

    public function testFindMajorityElementWithValidMajority()
    {
        $input = [3, 3, 4, 2, 3, 3, 3];
        $expected = 3;
        $this->assertEquals($expected, $this->finder->findMajorityElement($input));
    }

    public function testFindMajorityElementWithoutMajority()
    {
        $input = [1, 2, 3, 4, 5];
        $expected = null;
        $this->assertEquals($expected, $this->finder->findMajorityElement($input));
    }

    public function testFindMajorityElementWithExactMajority()
    {
        $input = [2, 2, 1, 1, 1, 2, 2];
        $expected = 2;
        $this->assertEquals($expected, $this->finder->findMajorityElement($input));
    }

    public function testFindMajorityElementWithSingleElement()
    {
        $input = [7];
        $expected = 7;
        $this->assertEquals($expected, $this->finder->findMajorityElement($input));
    }

    public function testFindMajorityElementWithAllSameNumbers()
    {
        $input = [5, 5, 5, 5, 5];
        $expected = 5;
        $this->assertEquals($expected, $this->finder->findMajorityElement($input));
    }
}
