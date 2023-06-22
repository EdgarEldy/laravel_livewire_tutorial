<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add users seeder
        User::upsert(
            [
                [
                    'first_name' => 'Admin',
                    'last_name' => 'Admin',
                    'tel' => '77777777',
                    'email' => 'admin@gmail.com',
                    'address' => 'Kajaga',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],
                [
                    'first_name' => 'User',
                    'last_name' => 'User',
                    'tel' => '44444444',
                    'email' => 'user@gmail.com',
                    'address' => 'Kamenge',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],

            ],
            ['email'],
        );

        // Add 10 fake users
        User::factory()
            ->count(10)
            ->create();
    }
}
