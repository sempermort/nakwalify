<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('subcategories')->insert([
                'category_name' => Str::random(2),
                
            ]);
            DB::table('subcategories')->insert([
                'subcategory_name' => Str::random(2),
                'category_id' => int::random(2),
            ]);
        
    }
}
