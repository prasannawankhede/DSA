<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\PermutationWithCaseChange;

class PermutationWithCaseChangeTest extends TestCase
{
    public function testPermutationsOfAb()
    {
        $pcc = new PermutationWithCaseChange();

        ob_start();
        $pcc->solve("ab");
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, trim($output));

        $expected = [
            'ab',
            'aB',
            'Ab',
            'AB',
        ];

        sort($lines);
        sort($expected);

        $this->assertEquals($expected, $lines);
    }

    public function testSingleCharacter()
    {
        $pcc = new PermutationWithCaseChange();

        ob_start();
        $pcc->solve("a");
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, trim($output));

        $expected = [
            'a',
            'A',
        ];

        sort($lines);
        sort($expected);

        $this->assertEquals($expected, $lines);
    }

    public function testEmptyString()
    {
        $pcc = new PermutationWithCaseChange();

        ob_start();
        $pcc->solve("");
        $output = ob_get_clean();

        $lines = explode(PHP_EOL, trim($output));

        $expected = [''];

        $this->assertEquals($expected, $lines);
    }
}
