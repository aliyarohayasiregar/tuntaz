<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('123'), // Hash the password
        ]);
        // You can add more users here
    }
}
