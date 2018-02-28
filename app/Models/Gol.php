<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    protected $table = 'goles';
    protected $fillable = ['partidoId','jugadorId'];
    protected $primaryKey = 'golId';

    public function partido(){
        return $this->hasOne('App\Models\Partido', 'partidoId');
    }

    public function jugador() {
        return $this->hasOne('App\models\Jugador','jugadorId');
    }
}
