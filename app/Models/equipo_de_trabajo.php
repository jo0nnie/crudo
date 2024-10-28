<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo_de_trabajo extends Model
{
    use HasFactory;

    public function ordenesDeTrabajo()
    {
        return $this->hasMany(orden_de_trabajo::class);
    }
    public function equipoTecnicos()
    {
    return $this->hasMany(equipo_tecnico::class);
}

public function tecnicos()
{
    return $this->belongsToMany(Tecnico::class, 'equipo_tecnicos', 'equipo_de_trabajo_id', 'tecnico_id');
}
public function vehiculo()
{
    return $this->hasOneThrough(Vehiculo::class, equipo_tecnico::class, 'equipo_de_trabajo_id', 'id', 'id', 'vehiculo_id');
}




}
