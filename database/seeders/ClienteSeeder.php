<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente; // Asegúrate de que el nombre del modelo sea 'Cliente' con C mayúscula

class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nombre' => 'Pedro',
            'apellido' => 'Martínez',
            'direccion' => 'Calle 934',
        ]);
        Cliente::create([
            'nombre' => 'Mateo',
            'apellido' => 'Sánchez',
            'direccion' => 'Calle 129',
        ]);
        Cliente::create([
            'nombre' => 'Carlos',
            'apellido' => 'Ramírez',
            'direccion' => 'Calle 123',
        ]);
        Cliente::create([
            'nombre' => 'Laura',
            'apellido' => 'González',
            'direccion' => 'Avenida 456',
        ]);
        Cliente::create([
            'nombre' => 'Sofía',
            'apellido' => 'López',
            'direccion' => 'Calle 789',
        ]);
        Cliente::create([
            'nombre' => 'Javier',
            'apellido' => 'Pérez',
            'direccion' => 'Calle 321',
        ]);
        Cliente::create([
            'nombre' => 'Isabella',
            'apellido' => 'Torres',
            'direccion' => 'Calle 654',
        ]);
        Cliente::create([
            'nombre' => 'Diego',
            'apellido' => 'Hernández',
            'direccion' => 'Calle 987',
        ]);
        Cliente::create([
            'nombre' => 'Valentina',
            'apellido' => 'Martínez',
            'direccion' => 'Calle 159',
        ]);
        Cliente::create([
            'nombre' => 'Luis',
            'apellido' => 'García',
            'direccion' => 'Calle 753',
        ]);
    }
}

