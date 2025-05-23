<?php
namespace Tests\BinarySearch;

use App\BinarySearch\RotationCount;
use PHPUnit\Framework\TestCase;

class RotationCountTest extends TestCase
{
    private RotationCount $rotator;

    protected function setUp(): void
    {
        $this->rotator = new RotationCount();
    }

    public function testNoRotation()
    {
        $arr = [1, 2, 3, 4, 5];
        $this->assertSame(0, $this->rotator->count($arr));
    }

    public function testRotatedOnce()
    {
        $arr = [5, 1, 2, 3, 4];
        $this->assertSame(1, $this->rotator->count($arr));
    }

    public function testRotatedTwice()
    {
        $arr = [4, 5, 1, 2, 3];
        $this->assertSame(2, $this->rotator->count($arr));
    }

    public function testFullyRotated()
    {
        $arr = [1, 2, 3, 4, 5]; // same as no rotation
        $this->assertSame(0, $this->rotator->count($arr));
    }

    public function testSingleElement()
    {
        $arr = [10];
        $this->assertSame(0, $this->rotator->count($arr));
    }

    public function testTwoElementsRotated()
    {
        $arr = [20, 10];
        $this->assertSame(1, $this->rotator->count($arr));
    }
}
