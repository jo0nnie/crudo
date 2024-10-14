<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    public function grupoDeTrabajo()
    {
        return $this->belongsTo(equipo_de_trabajo::class);
    }
}


