<?php
namespace Tests\Recursions;

use App\Recursions\TowerOfHanoi;
use PHPUnit\Framework\TestCase;

class TowerOfHanoiTest extends TestCase
{
    public function testOneDisk()
    {
        $hanoi = new TowerOfHanoi();
        $steps = $hanoi->solve(1);

        $expected = [
            "Move disk 1 from source to destination",
        ];

        $this->assertSame($expected, $steps);
    }

    public function testTwoDisks()
    {
        $hanoi = new TowerOfHanoi();
        $steps = $hanoi->solve(2);

        $expected = [
            "Move disk 1 from source to helper",
            "Move disk 2 from source to destination",
            "Move disk 1 from helper to destination",
        ];

        $this->assertSame($expected, $steps);
    }

    public function testThreeDisks()
    {
        $hanoi = new TowerOfHanoi();
        $steps = $hanoi->solve(3);

        $expected = [
            "Move disk 1 from source to destination",
            "Move disk 2 from source to helper",
            "Move disk 1 from destination to helper",
            "Move disk 3 from source to destination",
            "Move disk 1 from helper to source",
            "Move disk 2 from helper to destination",
            "Move disk 1 from source to destination",
        ];

        $this->assertSame($expected, $steps);
    }
}
