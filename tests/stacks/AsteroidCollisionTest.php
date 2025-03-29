<?php
namespace Tests\Stacks;

use App\Stacks\AsteroidCollision;
use PHPUnit\Framework\TestCase;

class AsteroidCollisionTest extends TestCase
{
    public function testSpace()
    {
        $solution = new AsteroidCollision();

        // Test Case 1: Positive asteroid wins collision
        $this->assertEquals([5, 10], $solution->space([5, 10, -5]));

        // Test Case 2: Equal size collision - both explode
        $this->assertEquals([], $solution->space([8, -8]));

        $this->assertEquals([-2, -1, 1, 2], $solution->space([-2, -1, 1, 2]));

        // Test Case 5: All moving right - no collisions
        $this->assertEquals([1, 2, 3], $solution->space([1, 2, 3]));

        $this->assertEquals([-10, 5], $solution->space([-10, 5]));

        // Additional test cases
        $this->assertEquals([4, 5], $solution->space([4, 5, -3]));
        $this->assertEquals([3], $solution->space([3, -1, -2]));
        $this->assertEquals([], $solution->space([1, -1, 2, -2]));

    }
}
