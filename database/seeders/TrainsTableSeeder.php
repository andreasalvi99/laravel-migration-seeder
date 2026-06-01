<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newTrain = new Train();

        $newTrain->company_name = $faker->company;
        $newTrain->departure_station = $faker->city;
        $newTrain->arrival_station = $faker->city;
        $newTrain->departure_time = $faker->time;
        $newTrain->arrival_time = $faker->time;
        $newTrain->train_code = $faker->bothify('????-####');
        $newTrain->carriage_count = $faker->numberBetween(5,13);
        $newTrain->is_delayed = $faker->boolean(0.5);
        $newTrain->is_cancelled = $faker->boolean(0.5);


        $newTrain->save();
    }
}
