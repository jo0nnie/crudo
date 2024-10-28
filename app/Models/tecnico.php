<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    public function ordenes()
    {
        return $this->belongsToMany(orden_de_trabajo::class, 'orden_tecnicos');
    }

    public function equiposDeTrabajo()
{
    return $this->belongsToMany(equipo_de_trabajo::class, 'equipo_tecnicos', 'tecnico_id', 'equipo_de_trabajo_id');
}

}



