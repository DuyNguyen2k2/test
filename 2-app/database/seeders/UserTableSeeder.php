<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nguyễn Duy',
            'email' => 'duynguyen.s2k2@gmail.com',
            'password' => Hash::make('07092002Duy'),
            'role' => 'manager',
        ]);
        User::create([
            'name' => 'Nguyễn A',
            'email' => 'abcdefghi@gmail.com',
            'password' => Hash::make('abc'),
        ]);
    }
}
