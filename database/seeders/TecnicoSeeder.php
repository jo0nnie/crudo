<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tecnico;

class TecnicoSeeder extends Seeder
{
    public function run()
    {
        Tecnico::create([
            'nombre' => 'Luis',
            'apellido' => 'García',
            'foto' =>'tecnico1.jpg',
            'correo'=>'lgarcia@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Sofía',
            'apellido' => 'Fernández',
            'foto' =>'tecnico2.jpg',
            'correo'=>'sfernandez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Santiago',
            'apellido' => 'Martinez',
            'foto' =>'tecnico3.jpg',
            'correo'=>'smartinez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Valentina',
            'apellido' => 'Baez',
            'foto' =>'tecnico4.jpg',
            'correo'=>'vbaez@tecnoservi.com',
        ]);


    }
}

