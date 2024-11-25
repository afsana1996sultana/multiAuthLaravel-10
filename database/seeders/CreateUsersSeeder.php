<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@appiflix-web.com',
               'type'=> 1,
               'password'=> bcrypt('123456'),
            ],

            [
               'name'=>'Sub-Admin',
               'email'=>'sub-admin@appiflix-web.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],

            [
               'name'=>'User',
               'email'=>'user@appiflix-web.com',
               'type'=> 0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
