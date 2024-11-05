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
            'Tarea_a_realizar' => 'Desconexión',
            'Fecha_de_creacion' => '2024-11-03',
            'cliente_id' => 1,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 2,
            'Estado' => 'En proceso',
            'Tarea_a_realizar' => 'Reconexión',
            'Fecha_de_creacion' => '2024-11-01',
            'cliente_id' => 2,
            'equipo_de_trabajo_id' => 2,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 3,
            'Estado' => 'Completado',
            'Tarea_a_realizar' => 'Conexión',
            'Fecha_de_creacion' => '2024-11-02',
            'cliente_id' => 3,
            'equipo_de_trabajo_id' => 3,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 4,
            'Estado' => 'Creado',
            'Tarea_a_realizar' => 'Servicio domiciliario',
            'Fecha_de_creacion' => '2024-11-01',
            'cliente_id' => 4,
            'equipo_de_trabajo_id' => 4,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 5,
            'Estado' => 'En proceso',
            'Tarea_a_realizar' => 'Desconexión',
            'Fecha_de_creacion' => '2024-11-02',
            'cliente_id' => 5,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 6,
            'Estado' => 'Creado',
            'Tarea_a_realizar' => 'Reconexión',
            'Fecha_de_creacion' => '2024-11-03',
            'cliente_id' => 6,
            'equipo_de_trabajo_id' => 2,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 7,
            'Estado' => 'Completado',
            'Tarea_a_realizar' => 'Conexión',
            'Fecha_de_creacion' => '2024-11-01',
            'cliente_id' => 7,
            'equipo_de_trabajo_id' => 3,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 8,
            'Estado' => 'En proceso',
            'Tarea_a_realizar' => 'Servicio domiciliario',
            'Fecha_de_creacion' => '2024-11-02',
            'cliente_id' => 8,
            'equipo_de_trabajo_id' => 4,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 9,
            'Estado' => 'Creado',
            'Tarea_a_realizar' => 'Desconexión',
            'Fecha_de_creacion' => '2024-11-03',
            'cliente_id' => 9,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'numero_de_orden' => 10,
            'Estado' => 'Completado',
            'Tarea_a_realizar' => 'Reconexión',
            'Fecha_de_creacion' => '2024-11-01',
            'cliente_id' => 10,
            'equipo_de_trabajo_id' => 2,
        ]);
    }
}

