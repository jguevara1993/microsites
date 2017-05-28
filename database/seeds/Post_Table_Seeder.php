<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Post_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++){
        \DB::table('posts')->insert(array(
            'user_id' => $faker->unique()->randomDigit,
            'status' => '1',
            'PostTitle' => $faker->sentence,
            'post' => $faker->paragraph,
            'slug' => $faker->unique()->word,
            'post_image' => 'post_images/example.jpeg',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ));
      }
    }
}
