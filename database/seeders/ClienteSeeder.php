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
    }
}
