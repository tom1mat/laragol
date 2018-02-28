<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'Partidos';
    protected $fillable = ['golesLocal','golesVisitante','fecha','localId','visitanteId'];
    protected $id = 'partidoId';

    public function goles(){
        return $this->hasMany('App\Models\Gol');
    }

    public function sanciones(){
        return $this->hasMany('App\Models\Sancion');
    }

    public function local(){
        return $this->hasOne('App\Models\Equipo','equipoId', 'localId');
    }

    public function visitante(){
        return $this->hasOne('App\Models\Equipo','equipoId', 'visitanteId');
    }
}
