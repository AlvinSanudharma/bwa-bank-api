<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Alvin',
            'username' => 'alvin',
            'email' => 'alvin@email.com',
            'profile_picture' => 'profile_picture.jpg',
            'ktp' => 'ktp.jpg',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
