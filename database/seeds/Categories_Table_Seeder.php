<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Categories_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10 ; $i++) {
          \DB::table('categories')->insert(array(
            'slug' => $faker->unique()->word,
            'category_name' => $faker->word,
            'category_description' => $faker->sentence,
            'created_at' => $faker->datetime,
            'updated_at' => $faker->datetime,
          ));
        }
    }
}
