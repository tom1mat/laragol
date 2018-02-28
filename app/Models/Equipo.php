<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use SoftDeletes; // Para que al eliminar cambie el estado y no lo elimine de verdad

    protected $table = 'Equipos';
    protected $fillable = ['equipo','ganados', 'empatados', 'perdidos', 'puntos'];
    protected $primaryKey = 'equipoId';

    public function jugadores(){
        return $this->hasMany('App\Models\Jugador', 'jugadorId');
    }

}
