<?php
namespace Tests\Heap;

use App\Heap\RankTransform;
use PHPUnit\Framework\TestCase;

class RankTransformTest extends TestCase
{
    public function testRankTransform()
    {
        $transformer = new RankTransform();

        $this->assertSame([4, 1, 2, 3], $transformer->arrayRankTransform([40, 10, 20, 30]));
        $this->assertSame([1, 2, 3, 4, 5], $transformer->arrayRankTransform([1, 2, 3, 4, 5]));
        $this->assertSame([1, 1, 1], $transformer->arrayRankTransform([100, 100, 100]));
        $this->assertSame([], $transformer->arrayRankTransform([]));
    }
}
