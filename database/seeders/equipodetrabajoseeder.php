<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\equipo_de_trabajo;

class EquipoDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        equipo_de_trabajo::create([
            'equipo' => 'Equipo A',
            'gerente_id' => 1,
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo B',
            'gerente_id' => 2,
        ]);
    }
}