<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // IMPORTANTE

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario Administrador
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'admin'
        ]);

        // Usuario Teacher
        User::create([
            'name' => 'ULSA',
            'email' => 'ulsa@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'teacher'
        ]);

        // Usuario Student
        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'student'
        ]);
    }
}

