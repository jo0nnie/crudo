<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo_tecnico extends Model
{
    use HasFactory;

    public function tecnico()
{
    return $this->belongsTo(Tecnico::class, 'tecnico_id');
}

public function vehiculo()
{
    return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
}

    public function equipo()
    {
        return $this->belongsTo(equipo_de_trabajo::class, 'equipo_id');
    }
}
