<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    protected $table = 'Sanciones';
    protected $fillable = ['tipo','cantidadFechas', 'observacion','partidoId','jugadorId'];
    protected $primaryKey = 'sancionId';

    public function partido(){
        return $this->hasOne('App\Models\Partido','partidoId');
    }

    public function jugador() {
        return $this->hasOne('App\models\Jugador','jugadorId');
    }

}
