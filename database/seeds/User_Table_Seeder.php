<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class User_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        \DB::table('users')->insert(array(

          'name' => 'Administrador',
          'email' => 'ejemplo@asiviajo.com',
          'password' => bcrypt('Administrador'),
          'avatar' => 'assets/img/avatar/default.png',
          'created_at' => $faker->dateTime,
          'updated_at' => $faker->dateTime,
        ));
    }
}
