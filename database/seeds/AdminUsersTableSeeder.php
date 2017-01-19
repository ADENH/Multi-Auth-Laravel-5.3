<?php

use Illuminate\Database\Seeder;
use App\AdminUser;
class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new AdminUser();
       $user->name = "Ade Nur Hidayat";
       $user->email = "adenh@gmail.com";
       $user->password = crypt("adek","");
       $user->save(); 
    }
}
