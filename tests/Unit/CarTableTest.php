<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use Faker\Generator as Faker;
use PHPUnit\Framework\Constraint\IsType;


class CarTableTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car;
        $car->make = "ford";
        $car->model = " ";
        $car->year = " ";
        $this->assertTrue($car->save());
    }

    public function testUpdateCar()
    {
        $car = Car::find(1);
        $car->year = "2000";
        $this->assertTrue($car->save());
    }

    public function testDeleteCar()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertTrue($car->delete());
    }

    public function testCarYearType(){

        $car = Car::find(1);
        $carYear=$car->year;
        $this->assertInternalType(IsType::TYPE_INT, $carYear);
    }

    public function testMakeValue(){

        $car = Car::find(1);
        $table = array("ford","honda", "toyota");

        $carmake=$car->Make;
        $this->assertTrue(in_array($carmake, $table) );
        }

    public function testCarModelType(){

        $car = Car::find(1);
        $car->Make = "toyota";
        $car->Model = "landcruiser";
        $car->year = "2018";
        $car->save();

        $car = Car::find(1);
        $carModel=$car->Model;

        $this->assertInternalType(IsType::TYPE_STRING, $carModel);
    }



}