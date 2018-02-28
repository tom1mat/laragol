<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';
    protected $fillable = ['jugador','equipoId', 'cantGoles'];
    protected $primaryKey = 'jugadorId';

    public function equipo(){
        return $this->belongsTo('App\Models\Equipo','equipoId', 'equipoId');
    }
}
