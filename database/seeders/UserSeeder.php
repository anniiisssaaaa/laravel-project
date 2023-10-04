<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'annisa@gmail.com',
            'password'=>'bcrypt'('Rahasia')
        ]);
        User::create([
            'name'=>'staff',
            'email'=>'nisa@gmail.com',
            'password'=>'bcrypt'('Rahasia3')
        ]);
    }
}
