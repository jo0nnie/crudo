<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cliente;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nombre' => 'Franco',
            'apellido' => 'Gómez',
            'email' => 'franco.gomez@ejemplo.com'
        ]);

        Cliente::create([
            'nombre' => 'Ana',
            'apellido' => 'Martínez',
            'email' => 'ana.martinez@ejemplo.com'
        ]);
    }
}
