<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i > 10; $i++){

            $travel = new Travel();

            $travel->destination = $faker->city();
            $travel->state = $faker->state();
            $travel->reservation_name = $faker->lastName();
            $travel->price = $faker->randomFloat(2, 100, 10000);
            $travel->guests_number = $faker->numberBetween(1, 6);
            $travel->save();

        }
    }
}
