@extends('template')

@section('main')
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

    {{ Form::model($jugador,["route" => ["jugadores.update",$jugador->jugadorId],'method' => "put"]) }}
    <div class="form-group">
        {{ Form::label('jugador','Nombre del jugador') }}
        {{ Form::text("jugador", null,["placeholder" => "Nombre del jugador","class" => "form-control"]) }}
        <br>
        {{ Form::submit('Editar',["class" => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}
@endsection