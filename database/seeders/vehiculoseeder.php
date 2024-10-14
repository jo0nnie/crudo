<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        Vehiculo::create([
            'patente' => 'ABC123',
            'marca' => 'Citroen',
            'modelo' => 'Berlingo',
            'equipo_de_trabajo_id' => 1,
        ]);
        Vehiculo::create([
            'patente' => 'DEF456',
            'marca' => 'Ford',
            'modelo' => 'Ranger',
            'equipo_de_trabajo_id' => 2,
        ]);
    }
}
