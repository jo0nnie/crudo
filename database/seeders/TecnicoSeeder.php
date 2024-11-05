<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tecnico;

class TecnicoSeeder extends Seeder
{
    public function run()
    {
        Tecnico::create([
            'nombre' => 'Horacio',
            'apellido' => 'Hernandez',
            'foto' =>'tecnico1.jpeg',
            'correo'=>'Cavilldo@henry.com',
        ]);
        Tecnico::create([
            'nombre' => 'Mario',
            'apellido' => 'González',
            'foto' => 'tecnico2.jpg',
            'correo' => 'mario.gonzalez@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Luis',
            'apellido' => 'Fernández',
            'foto' => 'tecnico3.jpeg',
            'correo' => 'luis.fernandez@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Artemio',
            'apellido' => 'Martínez',
            'foto' => 'tecnico4.jpeg',
            'correo' => 'art.martinez@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Carlos',
            'apellido' => 'Pérez',
            'foto' => 'tecnico5.jpeg',
            'correo' => 'carlos.perez@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Eloy',
            'apellido' => 'Díaz',
            'foto' => 'tecnico6.jpeg',
            'correo' => 'eleny.diaz@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Jorge',
            'apellido' => 'Ruiz',
            'foto' => 'tecnico7.jpeg',
            'correo' => 'jorge.ruiz@henry.com',
        ]);
        
        Tecnico::create([
            'nombre' => 'Lucio',
            'apellido' => 'Torres',
            'foto' => 'tecnico8.jpeg',
            'correo' => 'lucio.torres@henry.com',
        ]);
    }
}    