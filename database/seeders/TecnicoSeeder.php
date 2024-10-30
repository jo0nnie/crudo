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
            'correo'=>'lgarcia@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Sofía',
            'apellido' => 'Fernández',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico2.jpg',
            'correo'=>'sfernandez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Santiago',
            'apellido' => 'Martinez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico3.jpg',
            'correo'=>'smartinez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Valentina',
            'apellido' => 'Baez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico4.jpg',
            'correo'=>'vbaez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Pedro',
            'apellido' => 'Baez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico5.jpg',
            'correo'=>'pbaez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Celina',
            'apellido' => 'Benitez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico6.jpg',
            'correo'=>'cbenitez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Matias',
            'apellido' => 'Martinez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico7.jpg',
            'correo'=>'mmartinez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Lucia',
            'apellido' => 'Gonzalez',
            'disponibilidad' => 'Ocupado',
            'foto' =>'tecnico8.jpg',
            'correo'=>'lgonzalez@tecnoservi.com',
        ]);
        Tecnico::create([
            'nombre' => 'Luis',
            'apellido' => 'García',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico9.jpeg',
            'correo' => 'luis.garcia@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Sofía',
            'apellido' => 'Fernández',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico10.jpeg',
            'correo' => 'sofia.fernandez@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Pedro',
            'apellido' => 'Morales',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico11.jpeg',
            'correo' => 'pedro.morales@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Elena',
            'apellido' => 'Vargas',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico12.jpeg',
            'correo' => 'elena.vargas@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Juan',
            'apellido' => 'López',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico13.jpeg',
            'correo' => 'juan.lopez@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Daniela',
            'apellido' => 'Ríos',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico14.jpeg',
            'correo' => 'daniela.rios@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'José',
            'apellido' => 'Herrera',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico15.jpeg',
            'correo' => 'jose.herrera@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Marta',
            'apellido' => 'Sánchez',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico16.jpeg',
            'correo' => 'marta.sanchez@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Pablo',
            'apellido' => 'Gutiérrez',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico17.jpeg',
            'correo' => 'pablo.gutierrez@tecnoservi.com'
        ]);

        Tecnico::create([
            'nombre' => 'Carla',
            'apellido' => 'Núñez',
            'disponibilidad' => 'Ocupado',
            'foto' => 'tecnico18.jpeg',
            'correo' => 'carla.nunez@tecnoservi.com'
        ]);


    }
}

