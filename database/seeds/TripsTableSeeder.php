<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<20; $i++ ) {
            $new_trip = new Trip();
            $new_trip->departure = $faker->state();
            $new_trip->destination = $faker->state();
            $new_trip->save();
        }
    }
}
