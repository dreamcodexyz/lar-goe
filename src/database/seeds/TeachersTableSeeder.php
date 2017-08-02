<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,25) as $index){
            $text = $faker->text(15);
            $longtext = $faker->text(200);
            $phone = $faker->numberBetween(100000,999999);

            Teacher::create([
                'name' => $text,
                'phone' => $phone,
                'note' => $longtext,
                'address' => $longtext,
                'email' => $text,
                'facebook' => $text,
                'note' => $text,
            ]);
        }
    }
}
