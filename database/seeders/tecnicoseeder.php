<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tecnico;

class TecnicoSeeder extends Seeder
{
    public function run()
    {
        Tecnico::create([
            'nombre' => 'Luis',
            'apellido' => 'García',
            'disponibilidad' => 'Disponible',
        ]);
        Tecnico::create([
            'nombre' => 'Sofía',
            'apellido' => 'Fernández',
            'disponibilidad' => 'Ocupado',
        ]);

    }
}

