<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Car;
use App\Pilot;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class,50) -> make() ->each(function($car){
        $brand=Brand::inRandomOrder()->first();
        $car->brand_id=$brand->id;
        $car->save();
        });
    }
}
