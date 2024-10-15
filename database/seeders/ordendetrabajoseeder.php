<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orden_de_Trabajo;

class OrdenDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        Orden_de_Trabajo::create([
            'Estado' => 'Creado',
            'Fecha_de_creacion' => '2024-10-13',
            'Tareas_a_realizar' => 'Instalación de fibra óptica',
            'Nombre_de_Cliente' => 'Pedro',
            'Apellido_de_Cliente' => 'Martinez',
            'Direccion_de_Cliente' => 'Calle 26',
            'gerente_id' => 1,
            'equipo_de_trabajo_id' => 1,
        ]);
        Orden_de_Trabajo::create([
            'Estado' => 'En proceso',
            'Fecha_de_creacion' => '2024-10-14',
            'Tareas_a_realizar' => 'Mantenimiento de red',
            'Nombre_de_Cliente' => 'Mateo',
            'Apellido_de_Cliente' => 'Sanchez',
            'Direccion_de_Cliente' => 'Calle 738',
            'gerente_id' => 2,
            'equipo_de_trabajo_id' => 2,
        ]);
    }
}

