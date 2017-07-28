<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\CustomerResult;

class CustomerResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,500) as $index){
            $text = $faker->text(15);
            $longtext = $faker->text(200);
            $image = $faker->imageUrl();
            $phone = $faker->numberBetween(100000,999999);
            $birthday = $faker->dateTimeBetween();

            CustomerResult::create([
                'customer_id' => $faker->numberBetween(1, 1000),
                'type' => $faker->numberBetween(1, 3),
                'note' => $longtext,
                'result_date' => $birthday,
                'result' => $longtext,
            ]);
        }
    }
}
