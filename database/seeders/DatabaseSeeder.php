<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// Estas líneas son las que suelen faltar y causan el error en la línea 26
use Database\Seeders\GroupSeeder;
use Database\Seeders\RoboticsKitSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CourseSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Línea 26: El array de clases debe estar bien escrito y con comas
        $this->call([ 
            GroupSeeder::class, 
            RoboticsKitSeeder::class, 
            UserSeeder::class, 
            CourseSeeder::class,
        ]);
    }
}