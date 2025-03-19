<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\RearrangeBySign;

class RearrangeBySignTest extends TestCase
{
    private $rearrange;

    protected function setUp(): void
    {
        $this->rearrange = new RearrangeBySign();
    }

    /**
     * @dataProvider arrangeDataProvider
     */
    public function testArrange($arr, $expected)
    {
        $this->assertEquals($expected, $this->rearrange->arrange($arr));
    }

    public static function arrangeDataProvider()
    {
        return [
            [[1, -2, 3, -4, 5, -6], [1, -2, 3, -4, 5, -6]],
            [[-1, 2, -3, 4, -5, 6], [-1, 2, -3, 4, -5, 6]],
            [[1, 2, 3, -1, -2, -3], [1, -1, 2, -2, 3, -3]],
            [[-1, -2, -3, 1, 2, 3], [-1, 1, -2, 2, -3, 3]],
            [[], []]  // Empty array test case
        ];
    }
}
