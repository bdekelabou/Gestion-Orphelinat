<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'user_id' => 5, // Ensure this user ID exists in the users table
                'nom_utilisateur' => 'zaria',
                'password' => Hash::make('12345678'), // Encrypt the password
                'email' => 'admin@jpope.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6, // Ensure this user ID exists in the users table
                'nom_utilisateur' => 'ange',
                'password' => Hash::make('password2'), // Encrypt the password
                'email' => 'ange@jpope.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
