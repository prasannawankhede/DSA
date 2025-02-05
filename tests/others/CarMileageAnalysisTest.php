<?php

use PHPUnit\Framework\TestCase;
use App\CarMileageAnalysis;

class CarMileageAnalysisTest extends TestCase
{
    public function testAnalyze()
    {
        $cars = [
            (object)['make' => 'Toyota', 'model' => 'Camry', 'year' => 2020, 'mileage' => 30800],
            (object)['make' => 'Honda', 'model' => 'Civic', 'year' => 2019, 'mileage' => 32000],
            (object)['make' => 'Chevrolet', 'model' => 'Impala', 'year' => 2021, 'mileage' => 17500],
            (object)['make' => 'Audi', 'model' => 'R8', 'year' => 2020, 'mileage' => 13000],
            (object)['make' => 'Tesla', 'model' => 'Model 3', 'year' => 2018, 'mileage' => 50000],
        ];

        $analyzer = new CarMileageAnalysis();
        $result = $analyzer->analyze($cars);

        // The correct expected average is 28660.0
        $this->assertEquals(28660.0, $result['averageMileage'], 'Average mileage does not match.');
        $this->assertEquals(143300, $result['totalMileage'], 'Total mileage does not match.');
        $this->assertEquals($cars[4], $result['highestMileageCar'], 'Highest mileage car does not match.');
        $this->assertEquals($cars[3], $result['lowestMileageCar'], 'Lowest mileage car does not match.');
    }

    public function testEmptyArray()
    {
        $this->expectException(DivisionByZeroError::class);

        $analyzer = new CarMileageAnalysis();
        $analyzer->analyze([]);
    }
}
