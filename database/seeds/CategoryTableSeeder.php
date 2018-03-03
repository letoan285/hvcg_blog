<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	[
        		"name" => "Kinh te", 
        		"parent_id" => 0, 
        		"status" => 1
        	],
        	[
        		"name" => "Chinh chi", 
        		"parent_id" => 0, 
        		"status" => 1
        	],
        	[
        		"name" => "Xa hoi", 
        		"parent_id" => 0, 
        		"status" => 1
        	],
        	[
        		"name" => "Lam giau", 
        		"parent_id" => 1, 
        		"status" => 1
        	],
        	[
        		"name" => "Phu nu", 
        		"parent_id" => 0, 
        		"status" => 1
        	]
        ];
        DB::table('categories')->insert($categories);
    }
}
