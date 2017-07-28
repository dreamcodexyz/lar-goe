<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Inventory;

class InventoryTableSeeder extends Seeder
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

            $qty = $faker->numberBetween(1, 100);
            $price = $faker->numberBetween(1000, 10000000);
            $total = $qty * $price;
            Inventory::create([
                'name' => $text,
                'qty' => $qty,
                'price' => $price,
                'total' => $total,
                'invoice' => 1,
                'type' => 1,
            ]);
        }
    }
}
