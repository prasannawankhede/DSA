<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\RearrangeBySign;

class RearrangeBySignTest extends TestCase
{
    /**
     * @dataProvider rearrangeDataProvider
     */
    public function testArrange(array $input = [], array $expected = [])
    {
        $rearranger = new RearrangeBySign();
        $result = $rearranger->arrange($input);
        $this->assertEquals($expected, $result);
    }

    public function rearrangeDataProvider(): array
    {
        return [
            'mix of positives and negatives' => [[1, -2, 3, -4, 5, -6], [1, -2, 3, -4, 5, -6]],
            'more positives' => [[-5, -2, 5, 2], [5, -5, 2, -2]],
            'more negatives' => [[-1, 2, -3, 4], [2, -1, 4, -3]],
            'all positives' => [[1, 2, 3], [1, 2, 3]],
            'all negatives' => [[-1, -2, -3], [-1, -2, -3]]
        ];
    }
}
