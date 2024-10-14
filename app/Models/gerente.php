<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    public function gruposDeTrabajo()
    {
        return $this->hasMany(equipo_de_trabajo::class);
    }
}
