<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            CategoryParentingTableSeeder::class,
            TagsSeeder::class,
            ItemsSeeder::class,
            CategoryMembershipSeeder::class,
            TagForItemSeeder::class,

        ]);
    }
}
