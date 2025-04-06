<?php
namespace Tests\Recursions;

use App\Recursions\PrintUniqueSubsets;
use PHPUnit\Framework\TestCase;

class PrintUniqueSubsetsTest extends TestCase
{
    public function testSubsetsOfAb()
    {
        $ps = new PrintUniqueSubsets();
        $ps->solve("ab", "");

        ob_start();
        $ps->printUniqueSorted();
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, rtrim($output, PHP_EOL)); // preserve empty line

        $expected = ['', 'a', 'ab', 'b'];
        sort($lines);
        sort($expected);

        $this->assertEquals($expected, $lines);
    }

    public function testSubsetsOfAa()
    {
        $ps = new PrintUniqueSubsets();
        $ps->solve("aa", "");

        ob_start();
        $ps->printUniqueSorted();
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, rtrim($output, PHP_EOL));

        $expected = ['', 'a', 'aa'];
        sort($lines);
        sort($expected);

        $this->assertEquals($expected, $lines);
    }

    public function testSubsetsOfEmpty()
    {
        $ps = new PrintUniqueSubsets();
        $ps->solve("", "");

        ob_start();
        $ps->printUniqueSorted();
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, rtrim($output, PHP_EOL));

        $expected = [''];
        $this->assertEquals($expected, $lines);
    }
}
