<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ExtraHelp;

class ExtraHelpTableSeeder extends Seeder
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

            ExtraHelp::create([
                'customer_id' => 1,
                'class_id' => 1,
                'teacher_id' => 1,
                'content' => $longtext,
                'note' => $longtext,
                'is_actived' => 1,
            ]);
        }
    }
}
