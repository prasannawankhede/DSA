<?php

use PHPUnit\Framework\TestCase;
use App\Recursions\BinaryStringsWithoutConsecutiveOnes;

class BinaryStringsWithoutConsecutiveOnesTest extends TestCase
{
    public function testBinaryStringsLength3()
    {
        $generator = new BinaryStringsWithoutConsecutiveOnes();
        $result = $generator->solve(3);

        $expected = ["000", "001", "010", "100", "101"];

        // Sort to make comparison consistent
        sort($result);
        sort($expected);

        $this->assertEquals($expected, $result);
    }

    public function testBinaryStringsLength4()
    {
        $generator = new BinaryStringsWithoutConsecutiveOnes();
        $result = $generator->solve(4);

        $expected = [
            "0000", "0001", "0010", "0100", "0101",
            "1000", "1001", "1010"
        ];

        sort($result);
        sort($expected);

        $this->assertEquals($expected, $result);
    }

    public function testBinaryStringsLength0()
    {
        $generator = new BinaryStringsWithoutConsecutiveOnes();
        $result = $generator->solve(0);

        $this->assertEquals([""], $result);
    }

    public function testBinaryStringsLength1()
    {
        $generator = new BinaryStringsWithoutConsecutiveOnes();
        $result = $generator->solve(1);

        $expected = ["0", "1"];
        sort($result);
        sort($expected);

        $this->assertEquals($expected, $result);
    }
}
