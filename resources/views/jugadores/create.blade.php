@extends('template')

@section('main')
    {{ Form::open(["route" => "jugadores.store",'method' => "post"])  }}
    <div class="form-group">
        {{ Form::label('jugador','Nombre del jugador') }}
        {{ Form::text("jugador", null,["placeholder" => "Nombre del jugador","class" => "form-control"]) }}
        {{ Form::label('equipoId','Seleccionar equipo') }}
        {{ Form::select("equipoId",$equipos,null,['class' => "form-control"]) }}
        <br>
        {{ Form::submit('Insertar',["class" => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection