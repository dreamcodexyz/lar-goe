<?php

namespace Dreamcode\Goe\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(DocumentTableSeeder::class);
        $this->call(LessonTableSeeder::class);
        $this->call(ContenteTestsTableSeeder::class);
        $this->call(ExtraHelpTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(CustomerResultsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(StoresTableSeeder::class);
    }
}
