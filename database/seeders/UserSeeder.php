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
        $users = [
            [
                'username' => 'bevannstivens',
                'email' => 'bevannstivens@gmail.com',
                'password' => Hash::make('loremipsum')
            ],
            [
                'username' => 'jessicachandra',
                'email' => 'jessicachandra@gmail.com',
                'password' => Hash::make('loremipsum')
            ],
            [
                'username' => 'michellelevia',
                'email' => 'michellelevia@gmail.com',
                'password' => Hash::make('loremipsum')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
