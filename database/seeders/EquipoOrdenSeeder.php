<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\equipo_orden;

class EquipoOrdenSeeder extends Seeder
{
    public function run()
    {
        equipo_orden::create([
            'equipo_de_trabajo_id' => 1,
            'orden_de__trabajo_id' => 1,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 2,
            'orden_de__trabajo_id' => 2,
        ]);
    }
}

