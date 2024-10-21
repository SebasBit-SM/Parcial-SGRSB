<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['cliente_id', 'servicio_id', 'fecha_reserva', 'hora_reserva', 'comentarios'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function servicio() {
        return $this->belongsTo(Servicio::class);
    }
}
