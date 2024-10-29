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
        equipo_orden::create([
            'equipo_de_trabajo_id' => 3,
            'orden_de__trabajo_id' => 3,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 4,
            'orden_de__trabajo_id' => 4,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 5,
            'orden_de__trabajo_id' => 5,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 6,
            'orden_de__trabajo_id' => 6,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 7,
            'orden_de__trabajo_id' => 7,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 8,
            'orden_de__trabajo_id' => 8,
        ]);
        equipo_orden::create([
            'equipo_de_trabajo_id' => 9,
            'orden_de__trabajo_id' => 9,
        ]);
    }
}

