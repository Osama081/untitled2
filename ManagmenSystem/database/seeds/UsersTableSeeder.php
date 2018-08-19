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
        $user->name = "Osama Inayat";
        $user->email = "rajaosamainayat@gmail.com";
        $user->password = bcrypt('123456789');
        $user->role = 1;
        $user->save();
    }
}
