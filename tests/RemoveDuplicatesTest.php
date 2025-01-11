<?php

use PHPUnit\Framework\TestCase;
use App\RemoveDuplicates;

class RemoveDuplicatesTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function testRemoveDuplicates() {
        $remover = new RemoveDuplicates();

        $this->assertEquals(
            [1, 2, 3, 4, 5],
            $remover->do([1, 2, 2, 3, 4, 4, 5, 1]),
            "Test failed for array with duplicates"
        );

        $this->assertEquals(
            [1, 2, 3],
            $remover->do([1, 1, 1, 2, 2, 3]),
            "Test failed for array with all duplicates"
        );

        $this->assertEquals(
            [1],
            $remover->do([1, 1, 1]),
            "Test failed for array with one unique element"
        );

        $this->assertEquals(
            [],
            $remover->do([]),
            "Test failed for an empty array"
        );
    }
}
