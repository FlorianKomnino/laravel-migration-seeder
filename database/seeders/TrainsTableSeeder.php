<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->arrival_station = $faker->word();
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 day', '+1 week');
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->train_carriage = $faker->numberBetween(0, 10);
            $newTrain->is_in_time = $faker->numberBetween(0, 1);
            $newTrain->is_cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
