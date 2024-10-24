<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_de_Trabajo extends Model
{
    use HasFactory;
    public function gruposDeTrabajo()
    {
        return $this->belongsToMany(equipo_de_trabajo::class, 'grupo_orden');
    }
    public function cliente()
    {
    return $this->belongsTo(Cliente::class);
    }
    public function materiales()
    {
        return $this->belongsToMany(Material::class, 'material_orden');
    }
    public function equipo_de_trabajo()
    {
    return $this->belongsTo(equipo_de_trabajo::class, 'equipo_de_trabajo_id');
}


}
