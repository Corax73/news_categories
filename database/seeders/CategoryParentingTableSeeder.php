<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryParentingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $id = mt_rand(2, 100);
            $parent_id = $id + 1;
            DB::table('category_parentings')->insert([
                'category_id' => $id,
                'parent_id' => $parent_id
            ]);
        }
    }
}
