<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'nahda',
            'email' => 'nahda@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
