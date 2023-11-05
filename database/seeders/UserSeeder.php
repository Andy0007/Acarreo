<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        User::create([
            "name"=> "admin",
            "user"=> "admin",
            "email"=> "admin_acarreo@gmail.com",
            "password"=> "admin"
        ])->assignRole('Admin');
    }
}
