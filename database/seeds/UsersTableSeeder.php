<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $admin = factory('App\User')->create([

          	'username'=>'admin',
          	'name'=>'dddd',
          	'email'=>'ddddQ.qq.com',
          	'password'=>bcrypt('123456'),
          ]);

            $user1 = factory('App\User',3)->create([

          	'username'=>'user1',
          	'name'=>'dddd_user1',
          	'email'=>'user1.qq.com',
          	'password'=>bcrypt('123456'),
          ]);
    }
}
