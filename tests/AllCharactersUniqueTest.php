<?php

use PHPUnit\Framework\TestCase;
use App\AllCharactersUnique;

class AllCharactersUniqueTest extends TestCase {

    public function testUniqueString() {
        $obj = new AllCharactersUnique();
        $result = $obj->unique('abc');
        $this->assertEquals(true, $result);
    }

    public function testNonUniqueString() {
        $obj = new AllCharactersUnique();
        $result = $obj->unique('abca');
        $this->assertEquals(false, $result);
    }
}
