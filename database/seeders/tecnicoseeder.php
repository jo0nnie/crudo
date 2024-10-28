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
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico1.jpg',
            'correo'=>'lgarcia@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Sofía',
            'apellido' => 'Fernández',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico2.jpg',
            'correo'=>'sfernandez@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Santiago',
            'apellido' => 'Martinez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico3.jpg',
            'correo'=>'smartinez@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Julia',
            'apellido' => 'Medina',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico4.jpg',
            'correo'=>'jmedina@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Pedro',
            'apellido' => 'Baez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico5.jpg',
            'correo'=>'pbaez@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Celina',
            'apellido' => 'Benitez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico6.jpg',
            'correo'=>'cbenitez@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Matias',
            'apellido' => 'Martinez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico7.jpg',
            'correo'=>'mmartinez@gmail.com',
        ]);
        Tecnico::create([
            'nombre' => 'Lucia',
            'apellido' => 'Gonzalez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico8.jpg',
            'correo'=>'lgonzalez@gmail.com',
        ]);


    }
}

