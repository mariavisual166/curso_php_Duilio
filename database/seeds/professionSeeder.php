<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class professionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
       DB::table('professions')->insert([
       	 'title' => 'Backend',
       ]);
       DB::table('professions')->insert([
       	 'title' => 'Frotend',
       ]);
    }
}
