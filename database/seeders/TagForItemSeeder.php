<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagForItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $item_id = mt_rand(2, 100);
            $tag_id = mt_rand(2, 100);
            DB::table('tag_for_items')->insert([
                'item_id' => $item_id,
                'tag_id' => $tag_id
            ]);
        }
    }
}
