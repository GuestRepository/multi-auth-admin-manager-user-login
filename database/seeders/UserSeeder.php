<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'is_admin'=>1,
               'password'=> bcrypt('admin@gmail.com'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@gmail.com',
               'is_admin'=> 2,
               'password'=> bcrypt('manager@gmail.com'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'is_admin'=>0,
               'password'=> bcrypt('user@gmail.com'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
