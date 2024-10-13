<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\orden_de_trabajo;

class OrdenDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        orden_de_trabajo::create([
            'Estado' => 'Creado',
            'Fecha de creación' => '2024-10-01',
            'Tareas a relizar' => 'Instalación de Internet',
            'cliente_id' => 1  
        ]);

        orden_de_trabajo::create([
            'Estado' => 'En proceso',
            'Fecha de creación' => '2024-10-05',
            'Tareas a relizar' => 'Reparación de cableado',
            'cliente_id' => 2 
        ]);
    }
}

