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
            'foto' =>'vehiculo1.jpg',

        ]);
        Vehiculo::create([
            'patente' => 'DEF456',
            'marca' => 'Ford',
            'modelo' => 'Ranger',
            'foto' =>'vehiculo2.jpg',
        ]);
        Vehiculo::create([
            'patente' => 'HIJ789',
            'marca' => 'Volkswagen',
            'modelo' => 'Amarok',
            'foto' =>'vehiculo3.jpg',
        ]);
        Vehiculo::create([
            'patente' => 'KLM101',
            'marca' => 'Toyota',
            'modelo' => 'Hilux',
            'foto' =>'vehiculo4.jpg',
        ]);
    }
}
