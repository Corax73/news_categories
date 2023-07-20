<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $category_id = mt_rand(2, 100);
            $item_id = mt_rand(2, 50);
            DB::table('category_memberships')->insert([
                'category_id' => $category_id,
                'item_id' => $item_id
            ]);
        }
    }
}
