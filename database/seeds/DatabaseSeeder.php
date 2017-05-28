<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(Theme_Table_Seeder::class);
        $this->call(Option_Table_Seeder::class);
        $this->call(Categories_Table_Seeder::class);
        $this->call(Post_Table_Seeder::class);
        $this->call(User_Table_Seeder::class);
        $this->call(Block_Table_Seeder::class);


    }
}
