<?php
namespace App\Heap;

use SplMinHeap;

class KthLargestElementStream
{
    private int $k;
    private SplMinHeap $minHeap;

    public function __construct(int $k, array $nums)
    {
        $this->k       = $k;
        $this->minHeap = new class extends SplMinHeap
        {
            // just extending for type safety if needed later
        };

        foreach ($nums as $num) {
            $this->add($num);
        }
    }

    public function add(int $val): int
    {
        if ($this->minHeap->count() < $this->k) {
            $this->minHeap->insert($val);
        } elseif ($val > $this->minHeap->top()) {
            $this->minHeap->extract();
            $this->minHeap->insert($val);
        }

        return $this->minHeap->top();
    }
}
