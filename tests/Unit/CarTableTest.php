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
        $car=new Car;
        $car->make=" ford";
        $car->model=" ";
        $car->year=" ";
        $this->assertTrue($car->save());
    }
}
