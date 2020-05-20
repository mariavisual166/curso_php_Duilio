<?php

use App\userC;
use Illuminate\Database\Seeder;


class UserCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		DB::table('user_c_s')->insert([
       	 'name' => 'Backend',
       	 'email' => 'mariavisual166@gmail.com',
       	 'password' => 'Backend',
       	 'profession_id' => '1',
       ]);
   		DB::table('user_c_s')->insert([
       	 'name' => 'julio',
       	 'email' => 'mariavisual166@gmail.com',
       	 'password' => 'Backend',
       	 'profession_id' => '1',
       ]);
    }
}
