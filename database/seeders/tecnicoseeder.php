<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\tecnico;

class TecnicoSeeder extends Seeder
{
    public function run()
    {
        Tecnico::create([
            'nombre' => 'Luis',
            'apellido' => 'Navarro',
            'email' => 'luis.navarro@ejemplo.com',
            'disponibilidad' => 'Disponible'
        ]);

        Tecnico::create([
            'nombre' => 'Pedro',
            'apellido' => 'Ramírez',
            'email' => 'pedro.ramirez@ejemplo.com',
            'disponibilidad' => 'Ocupado'
        ]);
    }
}

