<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\gerente;

class GerenteSeeder extends Seeder
{
    public function run()
    {
        Gerente::create([
            'nombre' => 'Camila',
            'apellido' => 'Pérez',
            'email' => 'camila.perez@ejemplo.com'
        ]);

        Gerente::create([
            'nombre' => 'María',
            'apellido' => 'López',
            'email' => 'maria.lopez@ejemplo.com'
        ]);
    }
}
