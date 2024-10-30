<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cliente;
class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nombre' => 'Pedro',
            'apellido' => 'Martínez',
            'Direccion' => 'calle 934',
        ]);
        Cliente::create([
            'nombre' => 'Mateo',
            'apellido' => 'Sánchez',
            'Direccion' => 'calle 129',
        ]);
        Cliente::create([
            'nombre' => 'Carlos',
            'apellido' => 'Ramírez',
            'direccion' => 'Calle 123'
        ]);

        Cliente::create([
            'nombre' => 'Lucía',
            'apellido' => 'Gómez',
            'direccion' => 'calle 835'
        ]);

        Cliente::create([
            'nombre' => 'Jorge',
            'apellido' => 'Pérez',
            'direccion' => 'calle 235'
        ]);

        Cliente::create([
            'nombre' => 'Ana',
            'apellido' => 'Martínez',
            'direccion' => 'calle 407'
        ]);

        Cliente::create([
            'nombre' => 'Miguel',
            'apellido' => 'Torres',
            'direccion' => 'Calle 222'
        ]);
    }
}
