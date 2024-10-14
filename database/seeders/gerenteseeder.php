<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\gerente;

class GerenteSeeder extends Seeder
{
    public function run()
    {
        Gerente::create([
            'nombre' => 'Lara',
            'apellido' => 'Perez',
            'email' => 'Lara.perez@gmail.com',
        ]);
        Gerente::create([
            'nombre' => 'Ana',
            'apellido' => 'Gómez',
            'email' => 'ana.gomez@gmail.com',
        ]);
    }
}
