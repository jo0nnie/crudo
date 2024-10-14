<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material_orden extends Model
{
    use HasFactory;
    public function ordenes()
{
    return $this->belongsToMany(Orden_de_Trabajo::class, 'material_orden');
}
    
}