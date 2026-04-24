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
            'name' => 'John Doe',
            'email' => 'john@yopmail.com',
            'password'=> bcrypt('password'),
        ]);
        User::create([
            'name' => 'Tarun',
            'email' => 'tarun@yopmail.com',
            'password'=> bcrypt('password'),
        ]);
    }
}
