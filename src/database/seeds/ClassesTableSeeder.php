<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Classes;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,15) as $index){
            $text = $faker->text(15);
            $longtext = $faker->text(200);
            $image = $faker->imageUrl();
            $phone = $faker->numberBetween(100000,999999);
            $birthday = $faker->dateTimeBetween();

            Classes::create([
                'size' => 10,
                'note' => $longtext,
                'name' => $text,
                'type' => $faker->numberBetween(1, 2),
                'start_date' => $faker->dateTimeBetween(),
                'end_date' => $faker->dateTimeBetween(),
                'open_time' => $faker->time(),
                'close_time' => $faker->time(),
                'is_actived' => $faker->numberBetween(1, 2),
            ]);
        }
    }
}
