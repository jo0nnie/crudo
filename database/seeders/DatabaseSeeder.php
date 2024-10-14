<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(GerenteSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(TecnicoSeeder::class);
        $this->call(EquipoDeTrabajoSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(OrdenDeTrabajoSeeder::class);
        $this->call(OrdenTecnicoSeeder::class);
        $this->call(MaterialOrdenSeeder::class);
        $this->call(EquipoOrdenSeeder::class);
        $this->call(EquipoTecnicoSeeder::class);
        
        



        
    }
}
