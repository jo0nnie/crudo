<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ClienteSeeder::class);
        $this->call(TecnicoSeeder::class);
        $this->call(EquipoDeTrabajoSeeder::class);
        $this->call(VehiculoSeeder::class);
        $this->call(OrdenDeTrabajoSeeder::class);
        $this->call(EquipoTecnicoSeeder::class);

    }
}
