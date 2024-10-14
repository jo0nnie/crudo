<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cliente;
class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nombre' => 'Pedro',
            'apellido' => 'Martínez',
            'email' => 'Pedro.martinez@correo.com',
        ]);
        Cliente::create([
            'nombre' => 'Mateo',
            'apellido' => 'Sánchez',
            'email' => 'Mateo.sanchez@correo.com',
        ]);
    }
}
