<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      =>  'User One',
            'email'     =>  'user@gmail.com',
            'password'  =>  bcrypt('morley123')
        ]);

        User::create([
            'name'      =>  'User Two',
            'email'     =>  'user2@gmail.com',
            'password'  =>  bcrypt('morley123')
        ]);
    }
}
