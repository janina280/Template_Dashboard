<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
          //Admin
          [ 'name'=> "Test Admin",
            'email'=> "admin@exemple.com",
            'password'=> Hash::make("admin1234"),
            'role'=>"admin",
            'status'=>"active"
             ],

             //User
             [ 'name'=> "Test User",
             'email'=> "user@exemple.com",
             'password'=> Hash::make("user1234"),
             'role'=>"user",
            'status'=>"active"
              ],

               //User2
             [ 'name'=> "Test User2",
             'email'=> "user2@exemple.com",
             'password'=> Hash::make("user21234"),
             'role'=>"user",
            'status'=>"inactive"
              ],
        ]);
    }
}
