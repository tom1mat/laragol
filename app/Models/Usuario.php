<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuarios';
    protected $fillable = ['usuario','rol'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
