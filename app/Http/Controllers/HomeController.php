<?php

namespace App\Http\Controllers;

use App\models\Equipo;
use App\models\Gol;
use App\models\Jugador;
use App\models\Partido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $partidos = Partido::all();
        $goles = Gol::all();
        $equipos = Equipo::orderBy('puntos','desc')->get();
        $jugadores = Jugador::orderBy('cantGoles','desc')->get();

        foreach ($jugadores as $each){
            if($each->cantGoles > 0)
                $goleadores [] = $each;
        }

        return view('index', compact('partidos','goleadores','equipos','jugadores'));
    }
}
