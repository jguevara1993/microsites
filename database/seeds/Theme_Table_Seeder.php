<?php

use Illuminate\Database\Seeder;

class Theme_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('themes')->insert(array(
          'theme_name' => 'Aurora',
          'slug' => 'Aurora',
          'metadata' => 'Theme, Aurora',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Optimus',
          'slug' => 'Optimus',
          'metadata' => 'Theme, Optimus',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Basica',
          'slug' => 'Basica',
          'metadata' => 'Theme, Basica',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Stylo',
          'slug' => 'Stylo',
          'metadata' => 'Theme, Stylo',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'State',
          'slug' => 'State',
          'metadata' => 'Theme, State',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Clean_Dark',
          'slug' => 'Clean_Dark',
          'metadata' => 'Theme, Clean_Dark',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Clean_Light',
          'slug' => 'Clean_Light',
          'metadata' => 'Theme, Clean_Light',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Colorize',
          'slug' => 'Colorize',
          'metadata' => 'Theme, Colorize',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Inspire',
          'slug' => 'Inspire',
          'metadata' => 'Theme, Inspire',
          'theme_image' => 'preview.jpg',
        ));

        \DB::table('themes')->insert(array(
          'theme_name' => 'Test',
          'slug' => 'test',
          'metadata' => 'Theme, Test',
          'theme_image' => 'preview.jpg'
        ));

    }
}
