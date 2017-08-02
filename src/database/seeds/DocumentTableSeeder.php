<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Document;

class DocumentTableSeeder extends Seeder
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

            Document::create([
                'name' => $text,
                'note' => $longtext,
                'address' => $longtext,
                'is_actived' => 1,
            ]);
        }
    }
}
