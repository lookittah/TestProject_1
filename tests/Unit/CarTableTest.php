<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use Faker\Generator as Faker;
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
        $car->make = " ford";
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
    public function testCountCar()
    {
        $car = Car::all();
        $carCount=$car->count();
        $this->assertTrue($carCount==50);
    }

}