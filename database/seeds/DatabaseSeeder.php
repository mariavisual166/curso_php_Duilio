<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
       DB::statement('SET FOREIGN_KEY_CHECKS = 0');
       DB::table('professions')->truncate();
       DB::table('user_c_s')->truncate();
       DB::statement('SET FOREIGN_KEY_CHECKS = 1');
       $this->call([
    	professionSeeder::class,
    	UserCSeeder::class
       ]);
    }
}
