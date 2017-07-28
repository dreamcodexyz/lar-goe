<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ContentTest;

class ContenteTestsTableSeeder extends Seeder
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
            $phone = $faker->numberBetween(100000,999999);

            ContentTest::create([
                'name' => $text,
                'class_id' => 1,
                'content' => $longtext,
                'datetime' => $faker->dateTimeBetween(),
                'note' => $longtext,
                'type' => 1,
                'is_actived' => 1,
            ]);
        }

        foreach(range(1,15) as $index){
            $text = $faker->text(15);
            $longtext = $faker->text(200);
            $phone = $faker->numberBetween(100000,999999);

            ContentTest::create([
                'name' => $text,
                'class_id' => 1,
                'content' => $longtext,
                'datetime' => $faker->dateTimeBetween(),
                'note' => $longtext,
                'type' => 2,
                'is_actived' => 1,
            ]);
        }
    }
}
