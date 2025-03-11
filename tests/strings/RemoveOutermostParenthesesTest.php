<?php

use PHPUnit\Framework\TestCase;
use App\Strings\RemoveOutermostParentheses;

class RemoveOutermostParenthesesTest extends TestCase {

    public function testFilter() {
        $removeOuter = new RemoveOutermostParentheses();

        $this->assertEquals("()()()", $removeOuter->filter("(()())(())"));
        $this->assertEquals("()()()()(())", $removeOuter->filter("(()())(())(()(()))"));
        $this->assertEquals("", $removeOuter->filter("()()"));
        $this->assertEquals("", $removeOuter->filter("()"));  // Now correctly returns ""
        $this->assertEquals("(())()", $removeOuter->filter("((()))(())"));
        $this->assertEquals("", $removeOuter->filter("()"));
    }
}
