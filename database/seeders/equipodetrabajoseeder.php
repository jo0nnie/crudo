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
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo B',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo C',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo D',
        ]);
    }
}
