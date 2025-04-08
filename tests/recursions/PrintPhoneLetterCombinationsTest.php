<?php
namespace Tests\Unit;

use App\Recursions\PrintPhoneLetterCombinations;
use PHPUnit\Framework\TestCase;

class PrintPhoneLetterCombinationsTest extends TestCase
{
    private $solution;

    protected function setUp(): void
    {
        $this->solution = new PrintPhoneLetterCombinations();
    }

    public function testLetterCombinationsWithTwoDigits()
    {
        $digits   = "23";
        $expected = ["ad", "ae", "af", "bd", "be", "bf", "cd", "ce", "cf"];
        $result   = $this->solution->letterCombinations($digits);
        sort($result);
        sort($expected);
        $this->assertEquals($expected, $result);
    }

    public function testLetterCombinationsWithEmptyString()
    {
        $digits   = "";
        $expected = [];
        $result   = $this->solution->letterCombinations($digits);
        $this->assertEquals($expected, $result);
    }

    public function testLetterCombinationsWithSingleDigit()
    {
        $digits   = "2";
        $expected = ["a", "b", "c"];
        $result   = $this->solution->letterCombinations($digits);
        sort($result);
        sort($expected);
        $this->assertEquals($expected, $result);
    }

    public function testLetterCombinationsWithDigits79()
    {
        $digits   = "79";
        $expected = ["pw", "px", "py", "pz", "qw", "qx", "qy", "qz", "rw", "rx", "ry", "rz", "sw", "sx", "sy", "sz"];
        $result   = $this->solution->letterCombinations($digits);
        sort($result);
        sort($expected);
        $this->assertEquals($expected, $result);
    }
}
