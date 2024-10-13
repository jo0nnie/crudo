<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\material_orden;

class MaterialOrdenSeeder extends Seeder
{
    public function run()
    {
        material_orden::create([
            'material_id' => 1, 
            'orden_id' => 1      
        ]);

        material_orden::create([
            'material_id' => 2,
            'orden_id' => 1
        ]);

        material_orden::create([
            'material_id' => 1,
            'orden_id' => 2
        ]);

        material_orden::create([
            'material_id' => 2,
            'orden_id' => 2
        ]);
    }
}

