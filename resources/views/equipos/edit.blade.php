@extends('template')

@section('main')
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    {{ Form::model($equipo,["route" => ["equipos.update",$equipo->equipoId],'method' => "put"]) }}
    <div class="form-group">
        {{ Form::label('equipo','Nombre del equipo') }}
        {{ Form::text("equipo", null,["placeholder" => "Nombre del equipo","class" => "form-control"]) }}
        {{ Form::submit('Editar',["class" => "btn btn-primary"]) }}
    </div>
    {{ Form::close() }}

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Jugador</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jugadores as $each)
            <tr>
                <td><?php echo $each->jugador ?></td>
                <td>
                    <form action="{{ route("jugadores.destroy",$each->jugadorId)  }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger" type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection