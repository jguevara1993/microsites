<?php

use Illuminate\Database\Seeder;

class Option_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('options')->insert(array(
        'name' => 'app_name',
        'value' => 'Asiviajo Microsites',
      ));

      \DB::table('options')->insert(array(

        'name' => 'theme',
        'value' => 'test',
      ));

        \DB::table('options')->insert(array(

          'name' => 'facebook',
          'value' => 'asiviajoputocom',
        ));
        \DB::table('options')->insert(array(

          'name' => 'twitter',
          'value' => 'asiviajoputocom',
        ));
        \DB::table('options')->insert(array(

          'name' => 'linkedin',
          'value' => 'asiviajoputocom',
        ));
        \DB::table('options')->insert(array(

          'name' => 'instagram',
          'value' => 'asiviajoputocom',
        ));
    }
}
