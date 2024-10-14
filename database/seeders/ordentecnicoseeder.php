<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\orden_tecnico;

class OrdenTecnicoSeeder extends Seeder
{
    public function run()
    {
        orden_tecnico::create([
            'orden_de__trabajo_id' => 2,
            'tecnico_id' => 2,
        ]);
        orden_tecnico::create([
            'orden_de__trabajo_id' => 1,
            'tecnico_id' => 1,
        ]);
    }
}
