<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->company_name = 'Italo';
        $newTrain->departure_station = 'Roma Termini';
        $newTrain->arrival_station = 'Messina';
        $newTrain->departure_time = '08:30:00';
        $newTrain->arrival_time = '12:30:00';
        $newTrain->train_code = 'ITL310';
        $newTrain->carriage_count = 4;
        $newTrain->is_delayed = false;
        $newTrain->is_cancelled = false;


        $newTrain->save();
    }
}
