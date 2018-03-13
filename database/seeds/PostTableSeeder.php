<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
        	$post = [
        		'name' => $faker->name,
        		'image' => $faker->imageUrl($width = 640, $height = 480),
        		'description' => $faker->realText(rand(10,20)),
        		'category_id' => rand(1,5)
        	];
        	DB::table('posts')->insert($post);
        }

    }
}
