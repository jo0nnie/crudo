<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orden_de_Trabajo;

class OrdenDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        Orden_de_Trabajo::create([
            'numero_de_orden' => 1,
            'Estado' => 'Creado',
            'Tarea_a_realizar' => 'Conexion',
            'Fecha_de_creacion' => '2024-10-13',
            'cliente_id' => 1,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 2,
            'Estado' => 'En proceso',
            'Tarea_a_realizar' => 'Conexion',
            'Fecha_de_creacion' => '2024-10-14',
            'cliente_id' => 2,
            'equipo_de_trabajo_id' => 2,
        ]);

    }
}
