<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        Vehiculo::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'foto' =>'Vehiculo1.jpeg',

        ]);
        Vehiculo::create([
            'marca' => 'Fiat',
            'modelo' => 'Cronos',
            'foto' =>'Vehiculo2.jpeg',
        ]);
        Vehiculo::create([
            'marca' => 'Fiat',
            'modelo' => 'Bora',
            'foto' =>'Vehiculo3.jpeg',
        ]);
        Vehiculo::create([
            'marca' => 'Volkswagen',
            'modelo' => 'Voyage',
            'foto' =>'Vehiculo4.jpeg',
        ]);
    }
}
