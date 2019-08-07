<?php

use Illuminate\Database\Seeder;

use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       User::create(["name"=>"Cristian","email"=>"correo1@gmail.com","password"=>"123456789"]);

       	User::create(["name"=>"Jairo","email"=>"correo2@gmail.com","password"=>"123456789"]);

    	//factory(App\User::class)->times(10)->create();


    }
}
