<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->brand_name = $faker->word();
            $newTrain->start_station = $faker->words(4, true);
            $newTrain->end_station =
                $faker->words(4, true);
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time =
                $faker->dateTime();
            $newTrain->train_code = $faker->bothify('??##');
            $newTrain->coach_number = $faker->randomNumber(2, false);
            $newTrain->is_ontime = $faker->boolean();
            $newTrain->is_cancelled =
                $faker->boolean();
            // SAVE YOUR DATA
            $newTrain->save();
        }
    }
    /* $trains = config('db.trains');

        foreach ($trains as $train) {
            # code...
            $newTrain = new Train();
            $newTrain->brand_name = $train['brand_name'];
            $newTrain->start_station = $train['start_station'];
            $newTrain->end_station = $train['end_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->coach_number = $train['coach_number'];
            $newTrain->is_ontime = $train['is_ontime'];
            $newTrain->is_cancelled = $train['is_cancelled'];
            $newTrain->save();
        } */
}
