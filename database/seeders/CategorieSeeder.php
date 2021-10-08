<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
  
    public function run()
    {
      
            DB::table('subcategories')->insert([
                'category_name' => 'Development',
                
            ]); 
            DB::table('subcategories')->insert([
                'category_name' => 'Education',
                
            ]); 
            
            DB::table('subcategories')->insert([
                'subcategory_name' => 'faming',
                'category_id' => 1,
            ]);
            DB::table('subcategories')->insert([
                'subcategory_name' => 'cooking',
                'category_id' => 1,
            ]);
        
    }
}
