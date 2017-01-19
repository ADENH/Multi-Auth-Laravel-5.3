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
       $user = new User();
       $user->name = "Adek";
       $user->email = "adel@gmail.com";
       $user->password = crypt("adek","");
       $user->save(); 
    }
}
