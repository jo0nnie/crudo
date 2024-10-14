<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\material;

class MaterialSeeder extends Seeder
{
    public function run()
    {
        Material::create([
            'nombre' => 'Cables',
            'Stock' => 600,
            'Precio' => 3458.00,
        ]);
        Material::create([
            'nombre' => 'Conectores',
            'Stock' => 500,
            'Precio' => 348578.00,
        ]);
    }
}
