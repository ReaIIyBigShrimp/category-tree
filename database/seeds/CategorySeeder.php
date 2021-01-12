<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            'name' => 'Cats',
            'parent_id' => 0
        ]);
        DB::table('category')->insert([
            'name' => 'Dogs',
            'parent_id' => 0
        ]);
        DB::table('category')->insert([
            'name' => 'Cat Toys',
            'parent_id' => 1
        ]);
        DB::table('category')->insert([
            'name' => 'Cat Food',
            'parent_id' => 1
        ]);
        DB::table('category')->insert([
            'name' => 'Kitten Food',
            'parent_id' => 4
        ]);
        DB::table('category')->insert([
            'name' => 'Adult Cat Food',
            'parent_id' => 4
        ]);
        DB::table('category')->insert([
            'name' => 'Dog Toys',
            'parent_id' => 2
        ]);
        DB::table('category')->insert([
            'name' => 'Dog Food',
            'parent_id' => 2
        ]);

    }
}
