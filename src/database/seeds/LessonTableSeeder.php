<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Lesson;

class LessonTableSeeder extends Seeder
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

            Lesson::create([
                'name' => $text,
                'class_id' => 1,
                'teacher_id' => 1,
                'content' => $longtext,
                'content_test' => $longtext,
                'homework' => $longtext,
                'note' => $longtext,
            ]);
        }
    }
}
