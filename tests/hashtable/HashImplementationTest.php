<?php
namespace Tests\HashTable;

use App\HashTable\HashImplementation;
use PHPUnit\Framework\TestCase;

class HashImplementationTest extends TestCase
{
    private $hashTable;

    protected function setUp(): void
    {
        $this->hashTable = new HashImplementation(10);
    }

    public function testSetAndGet()
    {
        $this->hashTable->set("name", "Bruce");
        $this->assertSame("Bruce", $this->hashTable->get("name"));

        $this->hashTable->set("age", 25);
        $this->assertSame(25, $this->hashTable->get("age"));
    }

    public function testUpdateValue()
    {
        $this->hashTable->set("name", "Bruce");
        $this->hashTable->set("name", "Diana");
        $this->assertSame("Diana", $this->hashTable->get("name"));
    }

    public function testRemove()
    {
        $this->hashTable->set("name", "Bruce");
        $this->hashTable->remove("name");
        $this->assertNull($this->hashTable->get("name"));
    }

    public function testGetNonExistentKey()
    {
        $this->assertNull($this->hashTable->get("non_existent"));
    }

    public function testCollisionHandling()
    {
        $this->hashTable->set("name", "Bruce");
        $this->hashTable->set("mane", "Clark"); // Intentional collision
        $this->assertSame("Bruce", $this->hashTable->get("name"));
        $this->assertSame("Clark", $this->hashTable->get("mane"));
    }
}
