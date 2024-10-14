<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    public function ordenesDeTrabajo()
    {
        return $this->belongsToMany(orden_de_trabajo::class, 'material_orden');
    }
}
