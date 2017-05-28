<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Block_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0 ; $i < 6; $i++ ) {
          \DB::table('blocks')->insert(array(
            'title' => $faker->unique()->sentence,
            'page' => 'index',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));
        }

        for ($i=0; $i < 6; $i++) {
          \DB::table('blocks')->insert(array(
            'title' => $faker->unique()->sentence,
            'page' => 'about',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));
        }

        for ($i=0; $i < 6; $i++) {
          \DB::table('blocks')->insert(array(
            'title' => $faker->unique()->sentence,
            'page' => 'contact',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));
        }

        for ($i=0; $i < 6; $i++) {
          \DB::table('blocks')->insert(array(
            'title' => $faker->unique()->sentence,
            'page' => 'promo',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));
        }


          \DB::table('blocks')->insert(array(
            'title' => 'Footer 1',
            'page' => 'footer_1',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));



          \DB::table('blocks')->insert(array(
            'title' => 'Footer 2',
            'page' => 'footer_2',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));


          \DB::table('blocks')->insert(array(
            'title' => 'Footer 3',
            'page' => 'footer_3',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));



          \DB::table('blocks')->insert(array(
            'title' => 'Footer 4',
            'page' => 'footer_4',
            'body' => $faker->paragraph,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
          ));

    }
}
