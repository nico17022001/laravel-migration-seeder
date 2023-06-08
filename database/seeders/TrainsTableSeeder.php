<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $companys = ['Trenitalia', 'Italo'];

        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->randomElement($companys);
            $new_train->departure_station ='Stazione di : ' . $faker->city();
            $new_train->arrival_station ='Stazione di : ' . $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->regexify('[A-Z]{5}[0-4]{5}');
            $new_train->number_of_carriages = $faker->numberBetween(10, 20);
            $new_train->save();
        }
    }
}
