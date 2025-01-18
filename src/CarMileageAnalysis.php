<?php

namespace App;

class CarMileageAnalysis
{
    public function analyze(array $cars): array
    {
        if (empty($cars)) {
            throw new \DivisionByZeroError('Cannot calculate mileage for an empty array.');
        }

        $highest = PHP_INT_MIN;
        $lowest = PHP_INT_MAX;
        $total = 0;
        $highestMileageCar = null;
        $lowestMileageCar = null;

        foreach ($cars as $car) {
            $mileage = $car->mileage;  // Access as an object
            $total += $mileage;

            if ($mileage > $highest) {
                $highest = $mileage;
                $highestMileageCar = $car;
            }

            if ($mileage < $lowest) {
                $lowest = $mileage;
                $lowestMileageCar = $car;
            }
        }

        $averageMileage = round($total / count($cars), 2);

        return [
            'averageMileage' => $averageMileage,
            'highestMileageCar' => $highestMileageCar,
            'lowestMileageCar' => $lowestMileageCar,
            'totalMileage' => $total,
        ];
    }
}
