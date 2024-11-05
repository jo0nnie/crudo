<?php

namespace Database\Seeders;

use App\Models\equipo_de_trabajo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        equipo_de_trabajo::create(['equipo' => 'Equipo 1']);
        equipo_de_trabajo::create(['equipo' => 'Equipo 2']);
        equipo_de_trabajo::create(['equipo' => 'Equipo 3']);
        equipo_de_trabajo::create(['equipo' => 'Equipo 4']);
    }
}