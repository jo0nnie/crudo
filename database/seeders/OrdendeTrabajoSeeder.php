<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orden_de_Trabajo;

class OrdenDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        Orden_de_Trabajo::create([
            'numero_de_orden' => 00001,
            'Estado' => 'Creado',
            'Tarea_a_realizar' => 'Conexion',
            'Fecha_de_creacion' => '2024-10-13',
            'cliente_id' => 1,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 00002,
            'Estado' => 'En proceso',
            'Tarea_a_realizar' => 'Conexion',
            'Fecha_de_creacion' => '2024-10-14',
            'cliente_id' => 2,
            'equipo_de_trabajo_id' => 2,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 00003,
            'Estado' => 'No realizado',
            'Tarea_a_realizar' => 'Reconexion',
            'Fecha_de_creacion' => '2024-10-15',
            'cliente_id' => 3,
            'equipo_de_trabajo_id' => 3,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 00004,
            'Estado' => 'Realizado',
            'Tarea_a_realizar' => 'Desconexion',
            'Fecha_de_creacion' => '2024-10-16',
            'cliente_id' => 4,
            'equipo_de_trabajo_id' => 4,
        ]);
    }
}
