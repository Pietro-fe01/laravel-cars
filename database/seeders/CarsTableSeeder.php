<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = config('db-cars');

        foreach ($cars as $car) {
            $new_car = new Car();
                $new_car->make = $car['make'];
                $new_car->model = $car['model'];
                $new_car->year = $car['year'];
                $new_car->color = $car['color'];
            $new_car->save();
        }
    }
}
