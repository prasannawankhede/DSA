<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\MajorityElement;

class MajorityElementTest extends TestCase
{
    private $majorityElement;

    protected function setUp(): void
    {
        $this->majorityElement = new MajorityElement();
    }

    /**
     * @dataProvider majorityElementDataProvider
     */
    public function testFindMajorityElement($arr, $expected)
    {
        $result = $this->majorityElement->findMajorityElement($arr);
        $this->assertEquals($expected, $result);
    }

    public static function majorityElementDataProvider(): array
    {
        return [
            [[2, 2, 1, 1, 1, 2, 2], 2],      // Majority element is 2
            [[3, 3, 4, 2, 4, 4, 2, 4, 4], 4], // Majority element is 4
            [[1, 2, 3], -1],                 // No majority element
            [[5, 5, 5, 5, 2, 2, 2], 5],      // Majority element is 5
            [[6, 6, 6, 6, 7, 7], 6]          // Majority element is 6
        ];
    }
}
