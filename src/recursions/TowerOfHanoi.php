<?php
namespace App\Recursions;

class TowerOfHanoi
{
    private array $steps = [];

    public function solve(int $n): array
    {
        $this->steps = [];
        $this->move($n, 'source', 'destination', 'helper');
        return $this->steps;
    }

    private function move(int $n, string $source, string $destination, string $helper): void
    {
        if ($n === 1) {
            $this->steps[] = "Move disk 1 from $source to $destination";
            return;
        }

        $this->move($n - 1, $source, $helper, $destination);
        $this->steps[] = "Move disk $n from $source to $destination";
        $this->move($n - 1, $helper, $destination, $source);
    }
}
