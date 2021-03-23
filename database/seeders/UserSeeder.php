<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;
//import the database in seeder file and seeder use for dummy data

use Illuminate\Support\Facades\Hash;
//hash used for encrypt the password for dummy data in db table
use Illuminate\Support\Str;
//Str is used for string data
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('password'),

            'name' => 'Md.Rashiduzzaman',
            'email' => 'md.rashiduzzaman.cse@gmail.com',
            'password' =>hash::make('12345')
            // 'name'=>'robiul',
            // 'email'=>'robiul@gmail.com',
            // 'password'=>hash::make('ndkafnalk')  
            //hash::make is used for encrypt password in a table   
        ]);
    }
}
