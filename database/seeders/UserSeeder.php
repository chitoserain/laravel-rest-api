<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'test',
                'username' => 'test',
                'password' => Hash::make('test'),
                'token' => 'test',
            ], [
                'name' => 'test2',
                'username' => 'test2',
                'password' => Hash::make('test2'),
                'token' => 'test2',
            ]
        ]);
    }
}
