<?php

use PHPUnit\Framework\TestCase;
use App\DisplayLikes;

class DisplayLikesTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function testLikesOutput() {
        $displayLikes = new DisplayLikes();

        // Test case: No one likes
        $this->assertEquals(
            "no one likes this", 
            $displayLikes->like([]), 
            "Failed for empty array"
        );

        // Test case: One person likes
        $this->assertEquals(
            "Alice likes this", 
            $displayLikes->like(['Alice']), 
            "Failed for one person"
        );

        // Test case: Two people like
        $this->assertEquals(
            "Alice and Bob like this", 
            $displayLikes->like(['Alice', 'Bob']), 
            "Failed for two people"
        );

        // Test case: Three people like
        $this->assertEquals(
            "Alice, Bob and Charlie like this", 
            $displayLikes->like(['Alice', 'Bob', 'Charlie']), 
            "Failed for three people"
        );

        // Test case: More than three people like
        $this->assertEquals(
            "Alice, Bob and 2 others like this", 
            $displayLikes->like(['Alice', 'Bob', 'Charlie', 'David']), 
            "Failed for more than three people"
        );

        // Test case: Large array
        $names = ['Alice', 'Bob', 'Charlie', 'David', 'Eve'];
        $this->assertEquals(
            "Alice, Bob and 3 others like this", 
            $displayLikes->like($names), 
            "Failed for large array"
        );
    }
}
