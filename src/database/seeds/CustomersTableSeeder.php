<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Customer;

//php artisan db:seed

class CustomersTableSeeder extends Seeder
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

            Customer::create([
                'name' => $text,
                'image' => $image,
                'note' => $longtext,
                'gender' => $faker->numberBetween(1, 2),
                'phone' => $phone,
                'birthday' => $birthday,
                'status' => $faker->numberBetween(1, 6),
                'parent_id' => $faker->numberBetween(1, 50),
                'store_id' => $faker->numberBetween(1, 2),
                'school' => $text,
                'facebook' => $text,
                'parent_hope' => $longtext
            ]);
        }
    }
}
