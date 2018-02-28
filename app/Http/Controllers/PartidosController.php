<?php

namespace App\Http\Controllers;

use App\models\Equipo;
use App\models\Gol;
use App\models\Jugador;
use App\models\Partido;
use Illuminate\Http\Request;

class PartidosController extends Controller
{
    public function index(){
        $partidos = Partido::all();

        if($partidos)
            return view("partidos.index",compact('partidos'));
    }

    public function create(){
        $equipos = Equipo::all();
        $jugadores = Jugador::all();
        return view('partidos.create', compact('equipos','jugadores'));
    }

    public function store(Request $request){
        $datos = $request->all();
        $partido = new Partido();
        $partido->golesLocal = $datos['cantGolesLocal'];
        $partido->golesVisitante = $datos['cantGolesVisitante'];
        $partido->fecha = $datos['fecha'];
        $partido->localId = $datos['local'];
        $partido->visitanteId = $datos['visitante'];
        $partido->save();

        if($datos['golesLocal'] > $datos['golesVisitante']){
            $local = Equipo::find($datos['local']);
            $local->ganados++;
            $local->puntos+=3;
            $local->save();

            $visitante = Equipo::find($datos['local']);
            $visitante->perdidos++;
            $visitante->save();
        }else if($datos['golesVisitante'] > $datos['golesLocal']){
            $local = Equipo::find($datos['local']);
            $local->perdidos++;
            $local->save();

            $visitante = Equipo::find($datos['local']);
            $visitante->ganados++;
            $visitante->puntos+=3;
            $visitante->save();
        }else if($datos['golesVisitante'] == $datos['golesLocal']){
            $local = Equipo::find($datos['local']);
            $local->empatados++;
            $local->puntos+=1;
            $local->save();

            $visitante = Equipo::find($datos['local']);
            $visitante->empatados++;
            $visitante->puntos+=1;
            $visitante->save();
        }


        foreach ($datos['golesLocal'] as $each){
            $gol = new Gol();
            //'equipo','partidoId','jugadorId'
            $jugador = Jugador::find($each);
            $jugador->cantGoles++;
            $jugador->save();
            $gol->partidoId = $partido->id;
            $gol->jugadorId = $each;
            $gol->save();
        }

        foreach ($datos['golesVisitante'] as $each){
            $gol = new Gol();
            //'equipo','partidoId','jugadorId'
            $jugador = Jugador::find($each);
            $jugador->cantGoles++;
            $jugador->save();
            $gol->partidoId = $partido->id;
            $gol->jugadorId = $each;
            $gol->save();
        }

        // si se crea la carrera lo mando al listado
        // con un mensajito de que se creo correctamente.


        if($partido):
            return redirect()->route('partidos.index')->with('success',"El partido se creó correctamente");
        else:
            return redirect()->back()->withErrors()->withInput();
        endif;

    }

    public function destroy($id){
        $partido = Partido::find($id);

        if($partido):
            if($partido->destroy($id)):
                return redirect()->route("partidos.index")->with("success","Se eliminó correctamente el partido");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar el partido");
            endif;

        else:
            return redirect()->back()->withErrors("No se encontró el partido a eliminar");
        endif;
    }
}
