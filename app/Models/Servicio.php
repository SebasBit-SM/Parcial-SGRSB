<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'duracion', 'precio'];

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }
}
