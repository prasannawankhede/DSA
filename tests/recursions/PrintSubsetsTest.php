<?php
namespace Tests\Recursions;

use App\Recursions\PrintSubsets;
use PHPUnit\Framework\TestCase;

class PrintSubsetsTest extends TestCase
{
    public function testSubsetsOfAb()
    {
        $ps = new PrintSubsets();

        ob_start();
        $ps->solve("ab", "");
        $output = ob_get_clean();

        // 🔧 Fix: only remove the final newline, not empty subsets
        $lines = explode(PHP_EOL, rtrim($output, PHP_EOL));

        $expected = [
            '', // empty subset
            'a',
            'b',
            'ab',
        ];

        sort($lines);
        sort($expected);

        $this->assertEquals($expected, $lines);
    }

    public function testSubsetsOfEmptyString()
    {
        $ps = new PrintSubsets();

        ob_start();
        $ps->solve("", "");
        $output = ob_get_clean();

        $this->assertEquals('', trim($output));
    }
}
