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
    public function equipo_de_trabajo()
    {
        return $this->belongsTo(equipo_de_trabajo::class, 'equipo_de_trabajo_id'); // Asegúrate de que el segundo parámetro sea el nombre de la columna
    }
    public function equipoTecnicos()
{
    return $this->hasMany(equipo_tecnico::class);
}
public function tecnico()
{
    return $this->belongsTo(tecnico::class);
}
public function vehiculo()
{
    return $this->belongsTo(vehiculo::class);
}
public function equipoDeTrabajo()
{
    return $this->belongsTo(equipo_de_trabajo::class);
}











}
