<?php

namespace App\Http\Controllers;

use App\models\Equipo;
use App\models\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function index(){
        $jugadores = Jugador::all();

        return view('jugadores.index', compact('jugadores'));
    }

    public function create(){
        $equ = Equipo::all();
        foreach ($equ as $each){
            $equipos[$each->equipoId] = $each->equipo;
        }
        return view('jugadores.create', compact('equipos'));
    }
    public function store(Request $request){

        $datos = $request->all();
        if($datos['jugador']  == null)
            return redirect()->back()->withErrors('El nombre no puede ser nulo');
        $jugador = Jugador::create($datos);

        if($jugador):
            return redirect()->route('jugadores.index')->with('success',"El jugador $jugador->jugador se creó correctamente");
        else:
            return redirect()->back()->withErrors()->withInput();
        endif;
    }

    public function edit($id){
        $jugador = Jugador::find($id);
        return view('jugadores.edit', compact('jugador'));
    }

    public function update($id, Request $request){

        $datos = $request->all();

        $jugador = Jugador::find($id);

        if($jugador->update($datos))
            return redirect()->route('jugadores.index')->with('success',"Se editó el jugador $jugador->jugador correctamente");
        else
            return redirect()->back()->withErrors()->withInput();
    }

    public function destroy($id){
        $jugador = Jugador::find($id);

        if($jugador):
            if($jugador->destroy($id)):
                return redirect()->back()->with("success","Se eliminó correctamente el jugador $jugador->jugador");
            else:
                return redirect()->back()->withErrors("No se pudo eliminar el jugador $jugador->jugador");
            endif;

        else:
            return redirect()->back()->withErrors("No se encontró el jugador $jugador->jugador");
        endif;
    }
}
