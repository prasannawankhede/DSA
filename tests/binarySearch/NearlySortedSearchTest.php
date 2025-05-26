<?php
namespace Tests\BinarySearch;

use App\BinarySearch\NearlySortedSearch;
use PHPUnit\Framework\TestCase;

class NearlySortedSearchTest extends TestCase
{
    public function testFoundInMiddle()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50, 80, 70];
        $target = 40;

        $this->assertSame(2, $search->search($arr, $target));
    }

    public function testFoundInLeftNeighbor()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50, 80, 70];
        $target = 3;

        $this->assertSame(1, $search->search($arr, $target));
    }

    public function testFoundInRightNeighbor()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50, 80, 70];
        $target = 20;

        $this->assertSame(3, $search->search($arr, $target));
    }

    public function testNotFound()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50, 80, 70];
        $target = 100;

        $this->assertSame(-1, $search->search($arr, $target));
    }

    public function testFoundAtStart()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50];
        $target = 10;

        $this->assertSame(0, $search->search($arr, $target));
    }

    public function testFoundAtEnd()
    {
        $search = new NearlySortedSearch();
        $arr    = [10, 3, 40, 20, 50, 80];
        $target = 80;

        $this->assertSame(5, $search->search($arr, $target));
    }
}
