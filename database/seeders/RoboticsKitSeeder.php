<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoboticsKit; // IMPORTANTE

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoboticsKit::create([
            'name' => 'Kit Básico de Robótica',
            'description' => 'Un kit de robótica básico para principiantes, incluye sensores y actuadores esenciales.',
            'price' => 199.99,
            'stock' => 50,
        ]);

        RoboticsKit::create([
            'name' => 'Kit de Robótica Educativa',
            'description' => 'Un kit de robótica diseñado para uso educativo, con materiales didácticos y proyectos guiados.',
            'price' => 25.99,
            'stock' => 30,
        ]);

        RoboticsKit::create([
            'name' => 'Kit5',
            'description' => 'Un kit de robótica avanzado para usuarios con experiencia, incluye componentes de alta calidad y opciones de personalización.',
            'price' => 50.00,
            'stock' => 40,
        ]);
    }
}
