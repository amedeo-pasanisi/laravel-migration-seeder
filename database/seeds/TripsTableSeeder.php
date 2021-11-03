<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_trip = new Trip();
        $new_trip->departure = 'italy';
        $new_trip->destination = 'france';
        $new_trip->save();
    }
}
