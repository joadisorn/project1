<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name ="Adisorn Nampia";
        $user->username ="admin";
        $user->email ="joadisorn331@gmail.com";
        $user->password = Hash::make("1234");
        $user->save();
    }
}
