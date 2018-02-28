<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquiposRequest;
use App\models\Equipo;
use App\models\Jugador;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
//PREGUNTAR PORQUE ESTO!!!!
//    public function __construct(Route $route){
//        $this->route = $route;
//    }

    public function index(Equipo $equipo){ // Porque se pasa un equipo por parametro?
        $equipos = $equipo->get();

        if($equipos)
            return view("equipos.index",compact('equipos'));
    }

    public function apiIndexAll(){
        $equipos = Equipo::all();
        return (json_encode($equipos));
    }

    public function apiIndex($id){
        $equipo = Equipo::find($id);
        return (json_encode($equipo));
    }

    public function create(){
        return view('equipos.create');
    }

    public function store(EquiposRequest $request){
        //La validacion pasa por la clase EquiposRequest

        $datos = $request->all();
        $equipo = Equipo::create($datos);

        if($equipo)
            return redirect()->route('equipos.index')->with('success','El equipo se creó correctamente');
        else
            return redirect()->back()->withErrors()->withInput();

    }

    public function edit($id){
        $equipo = Equipo::find($id);
        // NO PUDE HACER LA FUCKING RELACION NO SE PORQUE
        //$jugadores = $equipo->jugadores();
        $jugad = Jugador::all();

        foreach ($jugad as $each){
            if($each->equipoId == $id)
                $jugadores[] = $each;
        }

        return view('equipos.edit',compact('equipo','jugadores'));
    }

    public function update($id, EquiposRequest $request){

        $datos = $request->all();

        $equipo = Equipo::find($id);

        if($equipo->update($datos))
            return redirect()->route('equipos.index')->with('success','Se editó el equipo correctamente');
        else
            return redirect()->back()->withErrors()->withInput();
    }

    public function destroy($id){
        $equipo = Equipo::find($id);

        if($equipo){
            if(Equipo::destroy($id))
                return redirect()->route('equipos.index')->with('success', 'Se eliminó correctamente un equipo');
            else
                return redirect()->back()->withErrors("No se pudo eliminar el equipo $equipo->equipo");
        }
    }


}
