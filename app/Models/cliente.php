<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    public function ordenesDeTrabajo()
    {
        return $this->hasMany(orden_de_trabajo::class);
    }
    protected $fillable = ['nombre', 'apellido', 'direccion'];
}
