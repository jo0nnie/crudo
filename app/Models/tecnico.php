<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;
    public function gruposDeTrabajo()
    {
        return $this->belongsToMany(equipo_de_trabajo::class, 'grupo_tecnico');
    }
    public function ordenes()
{
    return $this->belongsToMany(orden_de_trabajo::class, 'orden_tecnicos');
}


}
