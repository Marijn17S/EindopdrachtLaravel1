<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            ['Name' => "M4", 'Brand' => "BMW", 'Class' => "GT3", 'Horsepower' => 590, 'Weight' => 1430, 'Driver' => "Augusto Farfus", 'LastMaintenance' => Carbon::create(2022, 11, 1)],
            ['Name' => "R8 LMS Evo II", 'Brand' => "Audi", 'Class' => "GT3", 'Horsepower' => 585, 'Weight' => 1239, 'Driver' => "Robin Frijns", 'LastMaintenance' => Carbon::create(2022, 11, 2)],
            ['Name' => "GT3 II R", 'Brand' => "Porsche", 'Class' => "GT3", 'Horsepower' => 550, 'Weight' => 1220, 'Driver' => "Klaus Bachler", 'LastMaintenance' => Carbon::create(2022, 11, 3)],
            ['Name' => "Continental", 'Brand' => "Bentley", 'Class' => "GT3", 'Horsepower' => 600, 'Weight' => 1500, 'Driver' => "Maro Engel", 'LastMaintenance' => Carbon::create(2022, 11, 4)],
            ['Name' => "Vantage", 'Brand' => "Aston Martin", 'Class' => "GT3", 'Horsepower' => 543, 'Weight' => 1320, 'Driver' => "Nicki Thiim", 'LastMaintenance' => Carbon::create(2022, 11, 5)],
            ['Name' => "AMG GT3", 'Brand' => "Mercedes", 'Class' => "GT3", 'Horsepower' => 550, 'Weight' => 1285, 'Driver' => "Adam Christodoulou", 'LastMaintenance' => Carbon::create(2022, 11, 6)],
        ];
        DB::table('cars')->insert($cars);
    }
}
